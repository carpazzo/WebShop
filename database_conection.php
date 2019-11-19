<?php
    /* Host,username,password, database name*/
    $user = "root";
    $password = "";
    $database = "webstore";

    $mysqlpoint = mysqli_connect("localhost", "$user", "$password", "$database"); 
    if (mysqli_connect_errno ())  
    { 
        echo "Something went wrong:". mysqli_connect_error (); 
    }
    else
    {
        echo "Welcome WebDev!"; //here is to test if the database conection is working//
    }
?>