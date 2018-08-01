<?php
    session_start ();
    $_SESSION["Login"] = "YES";
    if (isset ($_SESSION["uid"]))
    {
        include "../database_conection.php"; 
        if (isset($_POST)){
          $cid = $_POST["customerID"];
          $cname = $_POST["customerName"];
          $csurname = $_POST["customerSurname"];
          $cemail = $_POST["customerEmail"];
          $caddress = $_POST["customerAddress"];
          $cphone = $_POST["customerPhone"];          
          
          $stmt = mysqli_prepare($mysqlpoint, "UPDATE customers SET CustomerName='$cname', CustomerSurname='$csurname', CustomerEmail='$cemail', CustomerAddress='$caddress', CustomerPhone='$cphone' WHERE CustomerID ='$cid'");
            
            /* execute query */
            mysqli_stmt_execute($stmt);

            /* fetch value */
            mysqli_stmt_fetch($stmt);

            /* close statement */
            mysqli_stmt_close($stmt);
        }

    } else 
    {
        header('HTTP/1.0 401 Unauthorized');
        echo 'You are not logged in!';
    }


?>