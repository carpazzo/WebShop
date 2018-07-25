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
    
    
</head>
<body>
    <div id="wrapper">
        <div id ="Header">
            <h2>Administrative Panel v1.1</h2>
        </div>
        <!-- the staff will have acess to some tools that will allow modify the database directly via the panel some of the controls still unavailable-->
        <div id="btnmenu">
            <button id="clients-btn">Costumers</button>
            <button id="products-btn">Products</button>
            <button id="orders-btn">Orders</button>
            <button id="clear-btn">Clear</button>
            <button id="updatepage">Update</button>
            <button id="refunds-btn">Refund </button>
            
            <button onclick="location.href='logoff.php'" >Log Out</button>
            
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
        <p>
        <input type="text" placeholder="ID" id="idsearchbox">
        <div id="customer-display">
        <!-- This Div will display the name of the customer by its ID -->
        </div>
        </p>
        <p>
        <button id="search-btn">Search</button>
        <button id="clear-search">Clear</button>    
        </p>

         <!-- here i want to be able for the staff update the customer if is that needed -->
        <h2>Customer Update</h2>            
        <form id="update-form" method="POST">
            <label for="change name">Enter user ID</label>
            <input type="number" placeholder="CustomerID" name="customerid" >            
            <input type="text" placeholder= "new name" name="customerName">
            <input type="text" placeholder= "surname" name="customerSurname">
            <input type="email" placeholder= "email" name="customerEmail">
            <input type="text" placeholder= "address" name="customerAddress">
            <input type="text" placeholder= "phone" name="customerPhone"> 
            <input type="submit" value="Update">             
        </form>

        <footer >
            <h2>Web Developer Dalton Ramiro</h2>
        </footer>        

    </div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/admin.js"></script>
</body>
</html>