<?php
    /* Host,username,password, database name*/
    $user = "dalton";
    $password = "admindatabase";
    $database = "webstore";

    $mysqlpoint = mysqli_connect("localhost", "$user", "$password", "$database"); 
    if (mysqli_connect_errno ())  
    { 
        echo "Something went wrong:". mysqli_connect_error (); 
    }
    /*else
    {
        echo "Welcome Admin!"; //here is to test if the database conection is working//
    }*/
?>