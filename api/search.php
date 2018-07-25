<?php

    session_start ();
    $_SESSION["Login"] = "YES";
    if (isset ($_SESSION["uid"]))
    {

        include "../database_conection.php"; 
        if (isset($_GET["searchQuery"]))
        {
            $searchQuery = $_GET["searchQuery"];
            $customersquery= "SELECT * FROM customers WHERE CustomerID = '$searchQuery'";
            $results = mysqli_query($mysqlpoint, $customersquery);
            $json = mysqli_fetch_all($results, MYSQLI_ASSOC);
            echo json_encode($json);
        }

    } else 
    {
        header('HTTP/1.0 401 Unauthorized');
        echo 'You are not logged in!';
    }

?>