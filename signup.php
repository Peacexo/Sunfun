

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> SignUp</title>
    <link rel="stylesheet" type="text/css" href="tired.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="signup.js"></script>
</head>
<body>
    <div class="container-fluid">
            <div class="header">

                    <!--Content before waves-->
                    <div class="inner-header flex">
                    <!--Just the logo.. Don't mind this-->
                    <!--<svg version="1.1" class="logo" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" xml:space="preserve">-->
                    <path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283" />
                    <g><path fill="#fff"
                    d="M250.4,0.8C112.7,0.8,1,112.4,1,250.2c0,137.7,111.7,249.4,249.4,249.4c137.7,0,249.4-111.7,249.4-249.4
                    C499.8,112.4,388.1,0.8,250.4,0.8z M383.8,326.3c-62,0-101.4-14.1-117.6-46.3c-17.1-34.1-2.3-75.4,13.2-104.1
                    c-22.4,3-38.4,9.2-47.8,18.3c-11.2,10.9-13.6,26.7-16.3,45c-3.1,20.8-6.6,44.4-25.3,62.4c-19.8,19.1-51.6,26.9-100.2,24.6l1.8-39.7    c35.9,1.6,59.7-2.9,70.8-13.6c8.9-8.6,11.1-22.9,13.5-39.6c6.3-42,14.8-99.4,141.4-99.4h41L333,166c-12.6,16-45.4,68.2-31.2,96.2  c9.2,18.3,41.5,25.6,91.2,24.2l1.1,39.8C390.5,326.2,387.1,326.3,383.8,326.3z" />
                    </g>
                    </svg>
                    <h1><img src="./images/reallogo.png" width="50px;" height="50px;">SunFun Farms</h1>
                    </div>

                    <!--Waves Container-->
                    <div>
                    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                    </g>
                    </svg>
            </div>
            </div>
<!--Waves end-->


<div class="subcontainer1">
        <nav class="navbar navbar-expand-sm">
  
            <a class="navbar-brand" href="javascript:void(0)"><img></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <p><a class="nav-link link-secondary" href="<?php echo "index.php" ?>">Home</a></p>
                    </li>
                    <li class="nav-item">
                        <p><a class="nav-link link-secondary" href="<?php echo "signup.php" ?>">Sign Up</a></p>
                    </li>
                    <li class="nav-item">
                        <p><a class="nav-link link-secondary" href="<?php echo "aboutus.php" ?>">About Us</a></p>
                </ul>
            <form class="d-flex" >
                <input class="form-control me-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="button">go</button>
            </form>
            </div>
        </div>
        </nav>

        <div class="form-container">
        <?php
        require('server.php');
        ?>
        <form id="signup" class="form" name="theForm" method="POST" action="signup.php">
            <h1>Sign Up</h1>
            <div class="form-field">
                <label for="username">Firstname:</label>
                <input onchange='checkFirstname()'   onkeypress = "this.onchange();"
   onpaste    = "this.onchange();"
   oninput    = "this.onchange();"
   onkeyup="enableSubmit()"
    type="text" name="firstname" class="required" id="firstname" autocomplete="off">
                <small></small>
            </div>

            <div class="form-field">
                <label for="username">Lastname:</label>
                <input type="text" name="lastname" class="required" id="lastname" autocomplete="off" onchange='checkLastname()'   onkeypress = "this.onchange();"
   onpaste    = "this.onchange();"
   oninput    = "this.onchange();"
   onkeyup="enableSubmit()">
                <small></small>
            </div>

            <div class="form-field">
                <label for="email">Email:</label>
                <input type="text" name="email" class="required" id="email" autocomplete="off" onchange='checkEmail()'   onkeypress = "this.onchange();"
   onpaste    = "this.onchange();"
   oninput    = "this.onchange();"
   onkeyup="enableSubmit()">
                <small></small>
            </div>

            <div class="form-field">
                <label for="username">Username:</label>
                <input type="text" name="username" class="required" id="username" autocomplete="off" onchange='checkUsername()'   onkeypress = "this.onchange();"
                onpaste    = "this.onchange();"
                oninput    = "this.onchange();"
                onkeyup="enableSubmit()">
                <small></small>
            </div>

            <div class="form-field">
                <label for="password">Password:</label>
                <input type="password" name="pasword" class="required" id="password" autocomplete="off" onchange='checkPassword()'   onkeypress = "this.onchange();"
                onpaste    = "this.onchange();"
                oninput    = "this.onchange();"
                onkeyup="enableSubmit()">
                <small></small>
            </div>


            <div class="form-field">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" name="confirm_password" class="required" id="confirm_password" autocomplete="off"  onchange='checkConfirmPassword()'   onkeypress = "this.onchange();"
                onpaste    = "this.onchange();"
                oninput    = "this.onchange();"
                onkeyup="enableSubmit()">
                <small></small>
            </div>

            <div class="form-field">
                <input type="submit" name="move" value="Sign Up" disabled></input>
            </div>
        </form>
        </div>
    </div>

    <footer class="footer-distributed">

			<div class="footer-left">

				<h3><img src="./images/reallogo.png" width="50px;" height="50px;"><span>SunFun Farms</span></h3>

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Blog</a>
					·
					<a href="#">Pricing</a>
					·
					<a href="#">About</a>
					·
					<a href="#">Faq</a>
					·
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">SunFun © 2022</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

			<div class="footer-right">

				<p>Contact Us</p>

				<form action="#" method="post">

					<input type="text" name="email" placeholder="Email">
					<textarea name="message" placeholder="Message"></textarea>
					<button>Send</button>

				</form>

			</div>

		</footer>

</body>
</html>