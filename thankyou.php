<?php

    include "database_conection.php";

    $cname = mysqli_real_escape_string($mysqlpoint,$_POST['name']);
    $csurname = mysqli_real_escape_string($mysqlpoint,$_POST['surname']);
    $cmail = mysqli_real_escape_string($mysqlpoint,$_POST['email']);
    $caddress = mysqli_real_escape_string ($mysqlpoint,$_POST['address']);
    $cphone = mysqli_real_escape_string($mysqlpoint,$_POST['phone']);
    //Username has been removed now user will log in using email and password
    $password = mysqli_real_escape_string ($_POST['password']);
    //reinforce the security of the database password with the new html 5 encoding method
    $securepassword = password_hash("$password", PASSWORD_DEFAULT);
    //So now it is important that the email be unique on the database.
    //SELECT CustomerEmail FROM customers WHERE email = ? Limit 1";
    $unique = "SELECT CustomerEmail FROM customers WHERE '$cmail' = CustomerEmail ";
    $run = mysqli_query($mysqlpoint,$unique);
    $check_email = mysqli_num_rows($run);
    if($check_email > 0)
    {
        
        echo "Email already registered!";
        header( "refresh:3;url=form.php" );
        exit();
    }
    else 
    {
        if (isset($_POST['submit']))
        {
            $sqlinsert = "INSERT INTO customers(CustomerName, CustomerSurname, CustomerEmail, CustomerAddress, CustomerPhone, Customerpassword) 
            VALUES ('$cname','$csurname','$cmail','$caddress','$cphone','$securepassword')";
                
            //Back to a simple query to reduce the num ber of query since the username was removed  
            if(!mysqli_query($mysqlpoint,$sqlinsert))
            {   
                die ("Error Creating new Membership!".mysqli_error($mysqlpoint));
            }
            echo "Welcome New Member!";
            echo "<br />";
            echo "Thank you for Register $cname"; 
            echo "<br />";
            echo "We will contact you at $cmail";

            header( "refresh:4;url=login.php" );
            
                
        }
    }   

?>