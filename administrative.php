<!-- Started the page being a session so it uses the administrative ID alos to include the database conection -->
<?php
    session_start ();
    $_SESSION["Login"] = "YES";
    if (isset ($_SESSION["uid"]))
    {
        echo "welcome ".$_SESSION["uid"];
        include "database_conection.php"; 
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
    <?php echo '<link rel="stylesheet" type="text/css" href="style.css">'; ?>
    
</head>
<body>
    <div id="wrapper">
        <div id ="Header">
            <h2>Administrative Panel v1.0</h2>
        </div>
        <!-- the staff will have acess to some tools that will allow modify the database directly via the panel some of the controls still unavailable-->
        <div id="admmenu">
            <input type="button" id="clients"  value="Clients">
            <input type="button" id="products"  value="Products">
            <input type="button" id="orders" value="Orders">
            <input type="button" id="na" value="Clear Search">
            <input type="button"  value="Update Customer" >
            <input type="button"  value="Refunds">
            <input type="button" value="Log Out" onclick="location.href='logoff.php'" >
            
            
        </div>

        <!-- this div will be where the results gonna be displayed for now all results are only hidden -->
        <div id ="sqldisplay">
            
            <h3>Database Display</h3> 
            <!-- here on display 1 we have all products being display -->
            <div id ="sqldisplay1">
            
                <?php
                    $query= "SELECT * FROM products" ;
                    $result = mysqli_query($mysqlpoint, $query);
                    while ($rad = mysqli_fetch_array($result))
                    {
                    echo $rad['ProductName']."<br>". " Size:".$rad['ProductSize']."<br>". " $".$rad['ProductPrice']. " ".$rad['ProductType']."<br>". " Details:".$rad['ProductColor']."<br>"."<br>";
                    }
                            
                    echo "<br>";  
                ?>

            </div>
             <!-- here on display 2 we have all customers being display --> 
            <div id ="sqldisplay2">
                
                <?php
                
                    $customersquery= "SELECT * FROM customers" ;
                    $results = mysqli_query($mysqlpoint, $customersquery);
                    while ($row = mysqli_fetch_array($results))
                    {
                        echo "ID ".$row['CustomerID']."| Name: ".$row['CustomerName']." ".$row['CustomerSurname']. "| Email: ".$row['CustomerEmail']." | Address:".$row['CustomerAddress']."<br>";
                    }
                    echo "<br>";
                ?>

            </div> 
             <!-- here on display 3 we have all orders being display -->
            <div id ="sqldisplay3">
                
                <?php
                
                    $ordersquery= "SELECT * FROM orders" ;
                    $results = mysqli_query($mysqlpoint, $ordersquery);
                    while ($row = mysqli_fetch_array($results))
                    {
                        echo "ID ".$row['OrderID']."| CustomerID: ".$row['CustomerID_fk']."| Total Price ".$row['TotalPrice']. "| Quantity: ".$row['Quantity']."| Shipping date:".$row['Shipped']."<br>";
                    }
                    echo "<br>";
                ?>

            </div>    

        </div> 
         <!-- the idea with the search is that the user can look for somethin specifique in the database but i couldnt make it functional    -->
        <input type="search" name="sqlsearch" placeholder="Database Search" id="searchbox"><input type="button" value="Search">    

         <!-- here i want to be able for the staff update the customer if is that needed,the query is not working as intended,but it doenst show where is the error             -->
        <h2>Customer Update</h2>            
        <form action="administrative.php" method="POST">
        
        <label for="change name">Enter user ID</label>
        <input type="number" placeholder="CustomerID" name="customerid" >            
        <input type="text" placeholder= "new name" name="updatename">
        <input type="text" placeholder= "surname" name="updatesurname">
        <input type="email" placeholder= "email" name="updateemail">
        <input type="text" placeholder= "address" name="updateaddress">
        <input type="text" placeholder= "phone" name="updatephone"> 
        <input type="button" name= "submit" value="Update">           
        <?php

                
            if (isset($_POST['submit']))
            {
                $cid= $_POST['customerid'];        
                $cname = $_POST['updatename'];
                $csurname = $_POST['updatesurname'];
                $cmail = $_POST['updateemail'];
                $caddress = $_POST['updateaddress'];
                $cphone = $_POST['updatephone'];
       

            
                $sqlupdate = $mysqlpoint->prepare ("UPDATE customers SET CustomerName='$name', CustomerSurname='$csurname', CustomerEmail='$cmail', CustomerAddress='$caddress', CustomerPhone='$cphone' WHERE CustomerID ='$cid'");
                $query->execute();
                if(!mysqli_query($mysqlpoint,$sqlupdate))
                {   
                    die ("Error updating Membership!".mysqli_error($mysqlpoint));
                }
                else 
                {
                    echo "Customer Updated!";
                    session_start ();
                    header ("Location: administrative.php");
                }
           
           
               
            }
          
  
        ?>           

        
        </form>

        <footer >
            <h2>Web Developer Dalton Ramiro</h2>
        </footer>        

    </div>
    <!-- the javascript to give some function to the clicks since the display is hidden as default -->
    <script type="text/javascript">
       
       document.getElementById("products").onclick = function() 
       {
           document.getElementById("sqldisplay1").style.display="block";
       } 
       document.getElementById("clients").onclick = function() 
       {
           document.getElementById("sqldisplay2").style.display="block";
       } 
       document.getElementById("orders").onclick = function() 
       {
           document.getElementById("sqldisplay3").style.display="block";
       } 

       document.getElementById("na").onclick = function()
       { 
           document.getElementById("sqldisplay").innerHTML = "Search Clear press F5";  
       }
    
    </script>
</body>
</html>