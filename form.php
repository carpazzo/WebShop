<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>formulary</title>
    
</head>
<body>

   <div id="wrapper">
        <div id ="Header">
            <nav id="menu">
             <li><a href="merchandise.php">Home</a></li>
             <li><a href="form.php">Become a Member</a></li>
             <li><a href="login.php">Log In</a></li>
            </nav>
            
        </div>

        <h3>Register!</h3>

        <div id ="formulary">

            <form method="post" action="thankyou.php">
                <p>
                <label for="name">Name:</label>
                <input name="name" type="text"  placeholder="Your name" required >
                <label for="surname">Surname:</label>
                <input name="surname" type="text" placeholder="Your surname" required  >
                </p>
                <!-- added 2 new fields for the login -->
                <p>
                <label for="username">Username</label>
                <input type="text"  name="username" required>
                </p>
                <p>
                <label for="password">Password</label>
                <input type="password"  name="userpassword" id= "password" required>
                
                </p>
                
        
                <p></p>
                <p>
                <label for="email">Email:</label>
                <input name= "email" type="email" id="email" placeholder="Your Email@host.com" required>
                <label for="phone">Phone:</label>
                <input type="text" placeholder="Mobile Number" name="phone" required>
                </p>    
                <p></p>
                <p>    
                <label for="address">Address:</label>
                <textarea name="address"  placeholder= "Street Name - 13a" cols="45" rows="2" required></textarea >
                </p>
                <p>
                <input type="submit" name="submit" value="Become Member">  
                </p>

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