<?php
include "database_conection.php";

//reinforce security by using real scape strings and avoid msql injections.
$loginname = mysqli_real_escape_string($mysqlpoint, $_POST['user-email']);
$loginpassword = mysqli_real_escape_string ($mysqlpoint,$_POST['userpassword']);

$passwordquery = "SELECT * FROM customers WHERE CustomerEmail = '$loginname'";
$result = mysqli_query($mysqlpoint, $passwordquery);
$customer = mysqli_fetch_assoc($result);
//the hash is a new form of validation for password embed in HTML 5
if (password_verify($loginpassword, $customer["CustomerPassword"]))
{
    
    // login in the user
    // start the session
    // redirect to main page
    session_start ();
    $_SESSION["Login"] = "YES";
    $_SESSION["uid"] = $customer["CustomerName"];
    $_SESSION["cid"] = $customer["CustomerID"];
    header ("Location: merchandise.php");

} 
else 
{
    // send back error message that username/password doesn't match
    session_unset();
    header ("Location: index.php");
}

//for administrative account check
if ($_POST["user-email"] == "adm" && $_POST["userpassword"] == "adm")
{
    session_start ();
    $_SESSION["Login"] = "YES";
    $_SESSION["uid"] = "Adm";
    header ("Location: administrative.php");
}

?>

