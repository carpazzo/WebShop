<?php
// Generate a hash of the password "mypassword"
$mypassword= "somethinginthedatabase";
$hash = password_hash("$mypassword", PASSWORD_DEFAULT);
 
// Echoing it out, so we can see it:
echo $hash;
 
// Some line breaks for a cleaner output:
echo "<br><br>";
 
// Using password_verify() to check if "mypassword" matches the hash.
// Try changing "mypassword" below to something else and then refresh the page.
if (password_verify('somethinginthedatabase', $hash)) {
    echo 'Password is valid!';
    
} else {
    echo 'Invalid password.';
}
?>
