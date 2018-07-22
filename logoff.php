<?php 

session_unset(); // Clears variables 
session_destroy(); // Kill the session 
header ("Location: login.php"); 
exit;

?>