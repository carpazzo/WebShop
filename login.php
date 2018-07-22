
<?php
    session_start ();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
     
    
</head>
<body>
    <div id:"wrapper">
        <h3 class="biglog">Login</h3>
        
            <div id:"loginbox">
           
                <form method="POST" action="validation.php" >
                    <p>
                    <input type="text" class="logbox" name="username" placeholder="USERNAME" required>
                    </p>
                    <p>
                    <input type="password"  class="logbox" name="userpassword" placeholder= "PASSWORD" required>
                    </p>
                    <p>
                    <input type="submit"  value="Login"> <a href="form.php"><button type="button">Register</button></a>
                    </p>
                    <!-- I thoug about have a guest login in case a person whants only browsing but this login page open upon request and not default,this is not the page index -->
                    <!-- <p>
                    <button type="button" onclick="location.href='merchandise.php'">Just browsing!</button>    
                    </p> -->

                 </form>

            </div>
            
        <footer>
                
            <h3>Policy</h3>
           
            <h3>Contact</h3>
            
        </footer>
        
    </div>
    
</body>
</html>