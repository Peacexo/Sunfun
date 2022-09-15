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
        <form id="signup" class="form" onsubmit="rade()" method="POST" action="<?php echo htmlspecialchars( $_POST['PHP_SELF'] ) ?>" onsubmit="validate()">
            <h1>Sign Up</h1>
            <div class="form-field">
                <label for="username">Firstname:</label>
                <input type="text" name="firstname" id="firstname" autocomplete="off">
                <small></small>
            </div>

            <div class="form-field">
                <label for="username">Lastname:</label>
                <input type="text" name="lastname" id="lastname" autocomplete="off">
                <small></small>
            </div>

            <div class="form-field">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" autocomplete="off">
                <small></small>
            </div>

            <div class="form-field">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" autocomplete="off">
                <small></small>
            </div>

            <div class="form-field">
                <label for="password">Password:</label>
                <input type="password" name="pasword" id="password" autocomplete="off">
                <small></small>
            </div>


            <div class="form-field">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" name="confirm_password" id="confirm_password" autocomplete="off">
                <small></small>
            </div>

            <div class="form-field">
                <input type="submit" name= "submit" value="send"></input>
            </div>
           
        </form>
        </div>
        <script src="signupp.js" type="text/javascript"></script>
</body>
</html>