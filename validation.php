<?php

$loginname = $_POST['username'];
$loginpassword = $_POST['userpassword'];
include "database_conection.php";

$loginquery = "SELECT * FROM loginuser WHERE username = '$loginname' AND userpassword = '$loginpassword'";
$result = mysqli_query($mysqlpoint, $loginquery);
    if(!mysqli_query($mysqlpoint,$loginquery))
        {
            die ("Failed to query database".mysqli_error($result));
        }
    $row = mysqli_fetch_array($result);
    if  ($row['username'] == $loginname && $row['userpassword'] == $loginpassword)
    {
        session_start ();
        $_SESSION["Login"] = "YES";
        $_SESSION["uid"] = $_POST["username"];
        header ("Location: merchandise.php");
    }
    else if($row['username']!= $loginname || $row['userpassword'] != $loginpassword)
    {  
        session_start ();
        header ("Location: login.php");
    }

    //for administrative account check
    if ($_POST["username"] == "adm" && $_POST["userpassword"] == "adm")
    {
        session_start ();
        $_SESSION["Login"] = "YES";
        $_SESSION["uid"] = $_POST["username"];
        header ("Location: administrative.php");
    }

?>

