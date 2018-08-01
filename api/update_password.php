<?php
    session_start ();
    $_SESSION["Login"] = "YES";
    if (isset ($_SESSION["uid"]))
    {
        include "../database_conection.php"; 
        if (isset($_POST)){
          $cid = $_POST["customerID"];
          $cpassword = $_POST["newPassword"];          
          $securepassword = password_hash($cpassword, PASSWORD_DEFAULT);
              
          $update = mysqli_query("UPDATE customers SET CustomerPassword ='$securepassword' WHERE CustomerID ='$cid'");
          $run = mysqli_query($mysqlpoint,$update);
           
        }

    } else 
    {
        header('HTTP/1.0 401 Unauthorized');
        echo 'You are not logged in!';
    }


?>