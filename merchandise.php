
<?php
    session_start ();
    if (isset ($_SESSION["uid"]))
    {
        echo "Login sucess!! Welcome ".$_SESSION["uid"];
    }
    include "database_conection.php";
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
        <input type="button" value="Shop Cart">
        <input type="button" value="Purchase History">
        <div id ="sqldisplay">
            
                <?php
                    
                    $ordersquery= "SELECT * FROM orders JOIN customers WHERE orders.CustomerID_fk LIKE customers.CustomerID" ;
                    $results = mysqli_query($mysqlpoint, $ordersquery);
                    while ($row = mysqli_fetch_array($results))
                    {
                        echo "ID ".$row['OrderID']."| CustomerID: ".$row['CustomerID_fk']."| Total Price ".$row['TotalPrice']. "| Quantity: ".$row['Quantity']."| Shipping date:".$row['Shipped']."<br>";
                    }
                    echo "<br>";
                ?>
                

        </div> 
        <h1>Some of our Products</h1>
        <p>Become a member today and get 5%off!</p>
        <?php
             
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

        <p></p>
        <footer >
                
           <h3>Policy</h3>
               
           <h3>Contact</h3>
                
        </footer>

    </div>
</body>
</html>