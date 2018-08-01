$("#clients-btn").on("click", function()
{
    $.ajax({
        method: "GET",
        url: "api/clients.php",
        success: function(data, responseText, xhr)
        {   
            // console.log(JSON.parse(data));
            //just for debugging purposes
            var clients = JSON.parse(data);
            clearContainer();
            for(var i=0; i<clients.length; i++)
            {
                $("#data-container").append("<p id='sqlp'>ID: "+clients[i].CustomerID+"| Name: "+clients[i].CustomerName+" "+clients[i].CustomerSurname+"| Email: "+clients[i].CustomerEmail+"| Address: "+clients[i].CustomerAddress+"| Phone Number: "+clients[i].CustomerPhone+"</p>");
            }
        },
        error: function(xhr, statusText, errorMessage){
            clearContainer();
            $("#data-container").append("<p style='color: red;'>Failed to load clients</p>");
        }
    });
});

$("#products-btn").on("click", function()
{
    $.ajax({
        method: "GET",
        url: "api/products.php",
        success: function(data, responseText, xhr)
        {
            var products = JSON.parse(data);
            clearContainer();
            for(var i=0; i<products.length; i++)
            {
                $("#data-container").append("<p id='sqlp'>ID: "+products[i].ProductID+", Product: "+products[i].ProductName+", Product Size: "+products[i].ProductSize+", Price: "+products[i].ProductName+", Type: "+products[i].ProductType+"</p>");
            }
        },
        error: function(xhr, statusText, errorMessage)
        {
            clearContainer();
            $("#data-container").append("<p style='color: red;'>Failed to load clients</p>");
        }
    });
});

$("#orders-btn").on("click", function()
{
    $.ajax({
        method: "GET",
        url: "api/orders.php",
        success: function(data, responseText, xhr)
        {
            var orders = JSON.parse(data);
            clearContainer();
            for(var i=0; i<orders.length; i++)
            {
                $("#data-container").append("<p id='sqlp'>ID: "+orders[i].OrderID+", Customer ID: "+orders[i].CustomerID_fk+", Total Price: "+orders[i].TotalPrice+", Quantity: "+orders[i].Quantity+", Shipping Date: "+orders[i].Shipped+"</p>");
            }
        },
        error: function(xhr, statusText, errorMessage)
        {
            clearContainer();
            $("#data-container").append("<p style='color: red;'>Failed to load clients</p>");
        }
    });
});

$("#search-btn").on("click", function(){
    var searchQuery = $("#idsearchbox").val();

    if (searchQuery){
        $.ajax({
            method: "GET",
            url: "api/search.php",
            data: {
                "searchQuery": searchQuery,
            },
            success: function(data, responseText, xhr)
            {
                var customer = JSON.parse(data);
                if (customer !== null){
                   $("#customer-id").val(customer.CustomerID);
                   $("#customer-name").val(customer.CustomerName);
                   $("#customer-surname").val(customer.CustomerSurname);
                   $("#customer-email").val(customer.CustomerEmail);
                   $("#customer-address").val(customer.CustomerAddress);
                   $("#customer-phone").val(customer.CustomerPhone);
                } else {
                    alert("User Not Found");
                }
            },
            error: function(xhr, statusText, errorMessage)
            {
                console.log(errorMessage);
                
            }
        });
    }
});


$("#update-form").on("submit", function(event)
{
    // prevent the form from submission via html
    event.preventDefault();
    // here I do my custom submission code
    // get form data (includes all data in the form)
    var formData = $(this).serializeArray();
    // send data via ajax
    $.ajax({
        method: "POST",
        url: "api/update_client.php",
        data: formData,
        success: function(data, responseText, xhr)
        {
            alert("User updated successfully ;D");
           $("#clear-search").click();
        },
        error: function(xhr, statusText, errorMessage)
        {
            alert("Unexpected Error");
            console.log(errorMessage);
        }
    });
});

$("#update-password").on("submit", function(event)
{
    // prevent the form from submission via html
    event.preventDefault();
    // here I do my custom submission code
    // get form data (includes all data in the form)
    var formData = $(this).serializeArray();
    // send data via ajax
    $.ajax({
        method: "POST",
        url: "api/update_password.php",
        data: formData,
        success: function(data, responseText, xhr)
        {
            alert("User updated successfully ");
           $("#clear-search").click();
        },
        error: function(xhr, statusText, errorMessage)
        {
            alert("Unexpected Error");
            console.log(errorMessage);
        }
    });
});








$("#clear-btn").on("click",function()
{
    clearContainer();
});

function clearContainer()
{
    $("#data-container").html("");
   
}

$("#clear-search").on("click",function()
{
    $("#idsearchbox").val("");
    $("#update-form").trigger('reset');
    $("#update-password").trigger('reset');
});
