
<?php
    session_start ();
    if (isset ($_SESSION["uid"]))
    {
        echo "Login sucess!! Welcome ".$_SESSION["uid"];
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php echo '<link rel="stylesheet" type="text/css" href="style.css">'; ?>
    
    <title>store</title>
  
</head>
<body>

    <div id="wrapper" >

        <div id ="Header">
            <nav id="menu">
             
             <li><a href="merchandise.php">Home</a></li>
             <li><a href="form.php">Become a Member</a></li>
             <li><a href="logoff.php">Log Out</a></li>
            </nav>
        </div>
        <div id="btnmenu">
           
            <button id="gotocart-btn">Shop Cart</button>
            <button id="history-purchase">Previous Purchase</button>
            <button id="clear-btn">Clear</button>
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

        <h1>Some of our Products</h1>
        <p>Become a member today and get 5%off!</p>
        <div id="products-display">
            <!-- here is the display for all products in store -->
            <!-- Ill be changing it to be display using ajax once i find how to get the images for now ill continue wityh the old php way -->
            <?php
             include "database_conection.php";
             $query= "SELECT * FROM products" ;
             $result = mysqli_query($mysqlpoint, $query);
             echo "<table>";
             while ($rad = mysqli_fetch_array($result))
             {
                echo "<tr>";
                echo "<td>";
                echo $rad['ProductName']."<br>". " Size:".$rad['ProductSize']."<br>". " $".$rad['ProductPrice']. " ".$rad['ProductType']."<br>". " Details:".$rad['ProductColor'];
                echo "</td>";
                echo"<td>";
                echo '<img src="data:image/jpg;base64,'.base64_encode($rad['ProductImage']).'"width="160" height="170">'; 
                echo "</tr>";
             }
             echo "</table>";
            ?>
        
        </div>

        <input type="text" placeholder="Search Products" id="search"/>
        <button id="search-btn">Search</button>
        <ul id="result"></ul>
        
        <footer >
                
           <h3>Policy</h3>
               
           <h3>Contact</h3>
                
        </footer>

    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/members.js"></script>
    <!-- I added the script provided by the guide to make that widget offered in JqueryUI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
</html>