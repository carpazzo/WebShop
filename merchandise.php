
<?php
    session_start ();
    
    if (isset ($_SESSION["uid"]))
    {
        echo "Login sucess!! Welcome ".$_SESSION["uid"];
        echo "<br />";
        // just for debbuging , to be deleted
        // echo "ID ".$_SESSION["cid"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 

    <?php echo '<link rel="stylesheet" type="text/css" href="style.css">'; ?>
    <title>store</title>
</head>
<body>

    <div id="wrapper" >

        <div id ="Header">
            <nav id="menu">
             
            <a href="merchandise.php">Home</a>
            <a href="form.php">Become a Member</a>
            <a href="logoff.php">Log Out</a>
            </nav>
        </div>
        <div id="btnmenu">
           
            <button class="btn btn-primary btn-sm" id="gotocart-btn">Shop Cart</button>
            <button class="btn btn-primary btn-sm" id="history-purchase">Previous Purchase</button>
            <button class="btn btn-primary btn-sm" id="clear-btn">Clear</button>
            
            <!-- For this time I will only use the widget from JqueryUi -->
            <label for="tags">Search Product</label>
            <input id="tags">
            <!-- Later I will add functionality to this search where it will work using ajax -->
            <!-- <input type="text" placeholder="Search Products" id="search"/> -->
            <!-- <button id="search-btn">Search</button> -->
            <!-- <ul id="result"></ul> -->
         
        </div> 
        <div id ="customer-history">
            <!-- here will be the display for customers previous purchase -->
        </div>
       

        <h1 id="biglog">Some of our Products</h1>
        <p>Become a member today and get 5%off!</p>
        <div id="products-display">
            <!-- here is the display for all products in store -->
        </div> 

        <div class="container p-3">
            <div id="merch-cards" class="row justify-content-center">
            <!-- new way to display products -->
            </div>
        </div>
        
       
    </div>
        <footer id="dev">
            DRDev<sup>&reg;</sup>   
        </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/members.js"></script>
    <!-- I added the script provided by the guide to make that widget offered in JqueryUI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
</html>