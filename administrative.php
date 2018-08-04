<!-- Started the page being a session so it uses the administrative ID that have more permissions over the database -->
<?php
    session_start ();
    $_SESSION["Login"] = "YES";
    if (isset ($_SESSION["uid"]))
    {
        echo "welcome ".$_SESSION["uid"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admininstrative tool</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
   
</head>
<body>
    <div id="wrapper">
        <div id ="Header">
            <h2>Administrative Panel v1.1</h2>
        </div>
        <!-- the staff will have acess to some tools that will allow modify the database directly via the panel some of the controls still unavailable-->
        <div id="btnmenu">
        <div class="btn-group" role="group" aria-label="Basic example">
            <button class="btn btn-info btn-sm" id="clients-btn">Costumers</button>
            <button class="btn btn-info btn-sm" id="products-btn">Products</button>
            <button class="btn btn-info btn-sm" id="orders-btn">Orders</button>
            <button class="btn btn-info btn-sm" id="clear-btn">Clear</button>
            <button class="btn btn-info btn-sm" id="updatepage">Update</button>
            <button class="btn btn-info btn-sm" id="refunds-btn">Refund </button>
        </div> 

            <button class="btn btn-warning btn-sm" onclick="location.href='logoff.php'" >Log Out</button>
            
        </div>

        <!-- this div will be where the results gonna be displayed for now all results are only hidden -->
        <div id ="sqldisplay">
            
            <h3>Database Display</h3> 
            <!-- Now with ajax we can do something a little more appealing -->
            <div id="data-container">
            <!-- Here will be displayed the database content with ajax -->
            </div>
       
        </div> 
         <!-- the idea with the search is that the user can look for something specifique in the database but i couldnt make it functional    -->
        

         <!-- here i want to be able for the staff update the customer if is that needed -->
        <h2>Customer Update</h2>
        <div>
            <label for="customerID">Enter user ID</label>
            <input type="text" placeholder="ID" id="idsearchbox">
            <button class="btn btn-info btn-sm" id="search-btn">Search</button>
            <button class="btn btn-info btn-sm" id="clear-search">Clear</button>
        </div>

        <form id="update-form" method="POST">
            <input id="customer-id" type="hidden" name="customerID">
            <input id="customer-name" type="text" placeholder= "new name" name="customerName">
            <input id="customer-surname" type="text" placeholder= "surname" name="customerSurname">
            <input id="customer-email" type="email" placeholder= "email" name="customerEmail">
            <input id="customer-address" type="text" placeholder= "address" name="customerAddress">
            <input id="customer-phone" type="text" placeholder= "phone" name="customerPhone"> 
            <input class="btn btn-success btn-sm" type="submit" value="Update">             
        </form>
        <form id="update-password" method="post">
            <label for="customerID">Enter user ID</label>
            <input type="text" placeholder="ID" id="customerID">
            <input id="new-password" type="text" placeholder= "New Password" name="newPassword"> 
            <input class="btn btn-warning btn-sm" type="submit" value="Password Update">   
        </form>



        <footer >
            <h2>Web Developer Dalton Ramiro</h2>
        </footer>        

    </div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/admin.js"></script>
</body>
</html>

