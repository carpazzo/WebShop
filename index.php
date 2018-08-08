
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
    
</head>
<body>
    <div id="wrapper">
      
        <div id ="container">
            <h3 class="biglog">Login</h3>
            <form method="POST" action="validation.php" >
                <fieldset class="form-group">
                    <input type="text" class="form-control" name="user-email" placeholder="Email" required>
                </fieldset>
                <fieldset class="form-group">
                    <input type="password"  class="form-control" name="userpassword" placeholder= "PASSWORD" required>
                </fieldset>
                <h2 id="warning"></h2>
                <fieldset class="form-group">
                    <button type="submit" class="btn btn-outline-primary">Login</button>
                    <button onclick="location.href='form.php'" class="btn btn-outline-primary">Register</button>
                </fieldset>
                </form>
        </div>
  

    </div>
    <footer id="bigfoot" >

        <a href="http://"><h3>Policy</h3></a>    
        <a href="https://dalton_ramiro@hotmail.com"><h3>Contact</h3></a>
       
    </footer>

</body>
</html>