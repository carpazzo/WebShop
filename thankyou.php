
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <?php
     include "database_conection.php";
    
     $cname = $_POST['name'];
     $csurname = $_POST['surname'];
     $cmail = $_POST['email'];
     $caddress = $_POST['address'];
     $cphone = $_POST['phone'];
     //adding username and password to be used on login screen
     $username = $_POST['username'];
     $password = $_POST['userpassword'];
    //SELECT CustomerEmail FROM customers WHERE email = ? Limit 1";
     $unique = "SELECT * FROM customer WHERE CustomerEmail = '$cmail'";
     $run = mysqli_query($mysqlpoint,$unique);
     $check_email = mysqli_num_rows($run);
     if($check_email == 1)
     {
         echo "email already registered!";
         exit();
     }
     else {
        if (isset($_POST['submit']))
        {
         $sqlinsert = "INSERT INTO customers(CustomerName, CustomerSurname, CustomerEmail, CustomerAddress, CustomerPhone) VALUES ('$cname','$csurname','$cmail','$caddress','$cphone'); INSERT INTO loginuser(username, userpassword) VALUES ('$username','$password')";
              
         //I change the querry for multi query because im adding information to 2 tables .   
         if(!mysqli_multi_query($mysqlpoint,$sqlinsert))
            {   
              die ("Error Creating new Membership!".mysqli_error($mysqlpoint));
            }
            echo "Welcome New Member!";
            echo "<br />";
            echo "Thank you for Register $cname"; 
            echo "<br />";
            echo "We will contact you at $cmail";
           
               
        }
     }   


       
          
  
    ?>
    <title>Thank you for register!</title>
</head>
<body>
    <div id="wrapper">
        <p>
        <button type="button" onclick="location.href='merchandise.php'">Go To Shop!</button>
        </p>

        <footer>
                
           <h3>Policy</h3>
               
           <h3>Contact</h3>
                
        </footer>
    </div>
    
</body>
</html>

