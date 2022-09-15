<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title> SignUp</title>
</head>
<body>
<div class="form-container">
        <?php
        //require('server.php');
        ?>
        <form id="signup" class="form">
            <h1>Sign Up</h1>
     
                <label for="username">Firstname:</label>
                <input type="text" name="firstname" id="firstname" autocomplete="off">
               
        

            
                <label for="username">Lastname:</label>
                <input type="text" name="lastname" id="lastname" autocomplete="off">
              
        

          
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" autocomplete="off">
               
        

         
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" autocomplete="off">
               
       

                <label for="password">Password:</label>
                <input type="password" name="pasword" id="password" autocomplete="off">
              
         


           
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" name="confirm_password" id="confirm_password" autocomplete="off">
              
       

          
                <input type="submit" name= "move" value="Sign Up"></input>
      
        </form>
        </div>
</body>
</html>