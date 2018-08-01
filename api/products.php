<?php
    session_start ();
    $_SESSION["Login"] = "YES";
    if (isset ($_SESSION["uid"]))
    {
        include "../database_conection.php"; 
        $productsquery = "SELECT * FROM products" ;
        $results = mysqli_query($mysqlpoint, $productsquery);
        $json = mysqli_fetch_all($results, MYSQLI_ASSOC);
        foreach($json as $key=>$value){
            // save current ProductImage in a temp variable
            $temp = $json[$key]["ProductImage"];
            // encode Blob to Base64 String
            $json[$key]["ProductImage"] = base64_encode($temp);
        }
        echo json_encode($json);

    } else
    {
        header('HTTP/1.0 401 Unauthorized');
        echo 'You are not logged in!';
    }
?>