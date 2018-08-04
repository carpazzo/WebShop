<?php 
session_start();
session_unset(); // Clears variables 
session_destroy(); // Kill the session 
header ("Location: index.php"); 
exit;

?>