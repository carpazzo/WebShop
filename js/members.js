    
//This function will iterate over the database and return the products
// $(document).ready(function()
// {
//     $.ajax({
//         method: "GET",
//         url: "api/products.php",
//         success: function(data, responseText, xhr)
//         {
//             var products = JSON.parse(data);
//             for(var i=0; i<products.length; i++)
//             {   
//                 $("#products-display").append("<p>Product: "+products[i].ProductName+", Size: "+products[i].ProductSize+", Price:$ "+products[i].ProductPrice+", Type: "+products[i].ProductType+"</p><img height=150px,width=150px, src='data:image/jpg;base64,"+products[i].ProductImage+"'/>");
//                 // <img src='data:image/jpg;base64,"+products[i].ProductImage+"'/>
//             }
//         },
//         error: function(xhr, statusText, errorMessage)
//         {
//             clearContainer();
//             $("#products-display").append("<p style='color: red;'>Failed for some reason!</p>");
//         }
//     });
// });

$(document).ready(function()
{
    $.ajax({
        method: "GET",
        url: "api/products.php",
        success: function(data, responseText, xhr)
        {
            var products = JSON.parse(data);
        //     for(var i=0; i<products.length; i++)
        //     {   
        //         $(".card-body").append("<h5 class='card-title'>Product: "+products[i].ProductName+"</h5>");
        //         $(".card-img-top").append("<img src='data:image/jpg;base64,"+products[i].ProductImage+"'/>");
        //         // <img src='data:image/jpg;base64,"+products[i].ProductImage+"'/>
        //         $(".card-text").append("<p class='card-text'> Size: "+products[i].ProductSize+", Price:$ "+products[i].ProductPrice+", Type: "+products[i].ProductType+"</p>");
        //     }
        for(let i=0; i<products.length; i++)
            {   
                let template = `
                <div class="card col-sm-4 col-md-4 col-lg-2 m-1">
                    <img style="object-fit: contain; height: 150px;" class="card-img-top" src="data:image/jpg;base64, ${products[i].ProductImage}" alt="${products[i].ProductName}">
                    <div class="card-body">
                        <h5 class="card-title">${products[i].ProductName}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Size: </strong>${products[i].ProductSize}</li>
                        <li class="list-group-item"><strong>Price: </strong>$${products[i].ProductPrice}</li>
                        <li class="list-group-item"><strong>Type: </strong>${products[i].ProductType}</li>
                    </ul>
                    <button class="btn btn-info btn-md" id="buy-btn">Buy</button>
                </div>
                `;
                $("#merch-cards").append(template).hide().fadeIn();
            }
        },
        error: function(xhr, statusText, errorMessage)
        {
            clearContainer();
            $("#products-display").append("<p style='color: red;'>Failed for some reason!</p>");
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
                $("#customer-history").append("<p id='sqlp'>ID: "+orders[i].OrderID+", Product: "+orders[i].ProductID_fk+", Total Price: "+orders[i].TotalPrice+", Quantity: "+orders[i].Quantity+", Shipping Date: "+orders[i].Shipped+"</p>");
                
            }
        },
        error: function(xhr, statusText, errorMessage)
        {
            clearContainer();
            $("#customer-history").append("<p style='color: red;'>No Previous Purchases!!!</p>");
        }
    });
});


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