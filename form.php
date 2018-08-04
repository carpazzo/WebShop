<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 

    <title>formulary</title>
    
</head>
<body>

   <div id="wrapper">
        <div id ="Header">
            <nav id="menu">
             <a href="merchandise.php">Home</a>
             <a href="form.php">Become a Member</a>
             <a href="index.php">Log In</a>
            </nav>
            
        </div>

        <h3>Register!</h3>
        <div id="formulary">  
           

            <form method="post" action="thankyou.php">
                <fieldset class="form-group">
                    <label for="name">Name:</label>
                    <input id="name" name="name" class="form-control" type="text"  placeholder="Your name" required >
                    <label for="surname">Surname:</label>
                    <input id="surname" name="surname" class="form-control" type="text" placeholder="Your surname" required  >
                </fieldset>
                <!-- Username has been removed and the user will sign in using  their email-->
              
                <fieldset class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id= "password" required>
                </fieldset>
                <p></p>
                <fieldset class="form-group">
                    <label for="email">Email:</label>
                    <input name= "email" class="form-control" type="email" id="email" placeholder="Your Email@host.com" required>
                    <div class="alert alert-warning" role="alert">
                        Attention - Make sure to type the right email!
                    </div>
                    <label for="phone">Phone:</label>
                    <input id="phone" type="text" class="form-control" placeholder="Mobile Number" name="phone" required>
                </fieldset>    
                <p></p>
                <fieldset class="form-group">
                    <label for="address">Address:</label>
                    <textarea id="address" name="address" class="form-control" placeholder= "Street Name - 13a"  rows="3" required></textarea >
                </fieldset>
                <fieldset class="form-group">
                    <input type="submit" class="btn btn-outline-primary" name="submit" value="Become Member">  
                </fieldset>

            </form> 
           
           
        </div>        
        <p></p>

        <footer >
                
            <h3>Policy</h3>
                    
            <h3>Contact</h3>
                     
        </footer>
        
    </div>

</body>
</html>