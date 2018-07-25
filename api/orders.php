<?php
    session_start ();
    $_SESSION["Login"] = "YES";
    if (isset ($_SESSION["uid"]))
    {
        include "../database_conection.php"; 
        $ordersquery= "SELECT * FROM orders" ;
        $results = mysqli_query($mysqlpoint, $ordersquery);
        $json = mysqli_fetch_all($results, MYSQLI_ASSOC);
        echo json_encode($json);
    } else 
    {
        header('HTTP/1.0 401 Unauthorized');
        echo 'You are not logged in!';
    }
?>