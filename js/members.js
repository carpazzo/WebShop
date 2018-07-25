    
$(document).ready(function()
{
    $.ajax({
        method: "GET",
        url: "api/products.php",
        success: function(data, responseText, xhr)
        {
            var products = JSON.parse(data);
            clearContainer();
            // while ($row = mysqli_fetch_array($result))
            for(var i=0; i<products.length; i++)
            {
                $("products-display").append("<p>ID:"+products.ProductID+", Product: "+products[i].ProductName+", ProductSize: "+products[i].ProductSize+", Price: "+products[i].ProductName+", Type: "+products[i].ProductType+"</p>");
                
            }
        },
        error: function(xhr, statusText, errorMessage)
        {
            clearContainer();
            $("products-display").append("<p style='color: red;'>Failed to load Products</p>");
        }
    });
});

$("#history-purchase").on("click", function()
{
    $.ajax({
        method: "GET",
        url: "api/history.php",
        success: function(data, responseText, xhr)
        {
            var orders = JSON.parse(data);
            clearContainer();
            for(var i=0; i<orders.length; i++)
            {
                $("#customer-history").append("<p id='sqlp'>ID: "+orders[i].OrderID+", Customer ID: "+orders[i].CustomerID_fk+", Total Price: "+orders[i].TotalPrice+", Quantity: "+orders[i].Quantity+", Shipping Date: "+orders[i].Shipped+"</p>");
                
            }
        },
        error: function(xhr, statusText, errorMessage)
        {
            clearContainer();
            $("#customer-history").append("<p style='color: red;'>No Previous Purchases!!!</p>");
        }
    });
});

// $(document).ready(function()
// {
//     $("#search").keyup(function()
//     {
//         $("#result").html("");
//         var searchfield = $("#search").val();
//         var expression = new RegExp(searchfield,"i");
        // $.getJson("products.json",function(data)
        // {
        //     $.each(data,function(key,value)
        //     {
        //        if(value.name.search(expression)!= -1 || value.location.search(expression)!= -1)
        //        {
        //           $("#result").append("<p>"+productName+"</p>"); 
        //        } 
        //     });
        // })
//         $.ajax({
//             method: "GET",
//             url: "api/products.php",
//             success: function(data, responseText, xhr)
//             {
//                 var products = JSON.parse(data);
//                 $.each(products,function(key,value)
//                 {
//                     if(value.name.search(expression)!= -1 || value.location.search(expression)!= -1)
//                     {
//                         $("#result").append("<p>"+products[i].productName+"</p>"); 
//                     } 
//                 });  
            
//             },
           
//         });
//     })
// })




$("#clear-btn").on("click",function()
{
    clearContainer();
});

function clearContainer()
{
    $("#customer-history").html("");
}

$( function() {
    var availableTags = [
      "Mug Gremmlins",
      "Mug Music",
      "Polo Shirt",
      "Shirt World Peace",
      "Shirt GreenPeace",
      "Snapback Hats"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
} );