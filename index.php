<?php
$title= "Home";
//require('server.php');
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> Home</title>
    <link rel="stylesheet" type="text/css" href="tired.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="maincontainer">
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
                    <!--Waves end-->

                    </div>
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
            <form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="button">go</button>
            </form>
            </div>
        </div>
        </nav>

        </div>

        <div class="overviewnote">
            <h3>Overview</h3>
            <p><strong>SunFun Farms</strong> is a diversified, full-time family farm
                that provides wholesome food and sustainably
                produced products for our community. We are a
                business that others can learn from, and we are a
                family that helps our neighbors and the rest of the world. We work in
                partnership with our plants, animals and with the natural
                world. We support other farmers who share our vision
                of sustainable agriculture, and we work to be as selfsufficient as possible. We are also eco-friendly
                and sustainable in order to combat climate change</p>
                <p>At <strong>SunFun Farms</strong>, our mission is to produce the
                        highest quality meats, fiber products and land
                        management services in the most environmentally and
                        economically sustainable manner possible. Using
                        animals, hand tools and, when necessary, motorized
                        equipment, we are striving to leave our land and our
                        community in better condition than we found them.</p>
        </div>

        <div id="slider">
            <a id="prev" href="#">&#8810;</a>
            <a id="next" href="#">&#811;</a>
            <ul id="slideWrap">
                <li><img src="./images/produce1.jfif"></li>
                <li><img src="./images/produce2.jpg"></li>
                <li><img src="./images/farm3.jpg"></li>
                <li><img src="./images/farm6.jpg"></li>
                <li><img src="./images/farm5.jpg"></li>
            </ul>
    </div>

    <script src="sunfunautomatic.js" type="text/javascript"></script>
        <div class="subcontainer2">
            <div class="imagegallerymain">
                <div class="imagecont1">
                <p>Large Areas</p>
                <hr></hr>
                    <div class="image1">
                        <img src="./images/farm1.jpg">
                    </div>
                    <div class="image2">
                        <img src="./images/farm2.jpg">
                    </div>
                </div>

                <div class="imagecont2">
                <p>Diverse Farming</p>
                <hr></hr>
                    <div class="image3">
                        <img src="./images/farm3.jpg">
                    </div>
                    <div class="image4">
                        <img src="./images/farm4.jpg">
                    </div>
                    
                </div>
            </div>
            <div class="valuez">
                <h3>Values</h3>
                <p>
                    Our farming activities should be profitable and enjoyable.
                    Farming is a family endeavor.
                    We strive to leave the land (including the agricultural infrastructure) that we manage in better condition than
                    when we found it.
                    We work in partnership with nature and with our animals (for herding and harvesting crops).
                    We value being able to tell our customers directly about our production practices rather than following a set of
                    government-prescribed practices.
                    We believe that grass-fed production is important for nutritional, ecological and economic reasons.
                    We value being part of a farming community; we enjoy helping other farmers (and receiving their help).
                    We value being a vital part of the larger community; we enjoy providing food and fiber for our neighbors.
                </p>
            </div>
            <div class="aboutcont">
                    <div id="aboutusintro">
                    <a href="<?php echo "aboutus.php" ?>"><input type="submit" name="submit" value="About Us"></input></a>
                    </div>
                    <div id="signupbutton">
                    <a href="<?php echo "signup.php" ?>"><input type="submit" name="submit" value="Sign Up"></input></a>
                    </div>
            </div>
        </div>

            <div class="loat">
                <div class="profilez">
                    <img>
                    <h4>The Managing Directors</h4>
                    <p>Having established the farms in the year 2000, supercouple, Funmi and Sunday have held the 
                        positions of Managing Directors since its inception. 
                        With their great work ethics and beliefs they have taken 
                        the farms to great heights in the 
                        agricultural sector.
                        
                        //The work history of a potential managing director is 
                        the chance he or she has to prove your competence. If you have
                        served in a number of positions which are relevant to the position of 
                        the managing director, you are simply telling your employer that 
                        you are more than ready to take on your new position. 
                        All the roles and responsibilities which you have handled would 
                        come in handy right here. If you have served in different other 
                        posts in a relevant field, make them a part of your resume. 
                        If you have taken part in internships and volunteering which is
                        very relevant to your position, you should also state it. 
                        There should however be some restraint to making this section 
                        too bulky else you risk boring the recruiter or looking like a braggart.

                        However take note that your most recent job positions should be 
                        stated first. Don't go ahead stating that 
                        you were the clerk of a store in high school before informing 
                        your employer that you served as an accountant at a reputable firm. 
                        Organize your work experience using the reverse chronological order.//</p>
                    </div>
                <div class="adverts">
                    <p>ADVERTISEMENT</p>
                    <img onmouseout="normalImg()" border="0" src="./images/advert.jpeg" alt="Smiley" width="300px;" height="500px;" id="this" 
                onmouseover="singing()" border="0" src="./images/inigo.jpg" alt="singing" width="300px;" height="500px;">
                </div>
            </div>

</div>
        <script src="advert.js" type="text/javascript"></script>
    </div>
    <div>
        <p style="font-size: 20px;">Our Location</p>
            <iframe width="800" height="400" frameborder="0" src="https://www.bing.com/maps/embed?h=400&w=800&cp=7.11733064169853~3.7017059326171875&lvl=14&typ=d&sty=h&src=SHELL&FORM=MBEDV8" scrolling="no">
            </iframe>
            <div style="white-space: nowrap; text-align: center; width: 800px; padding: 6px 0;">
                <a id="largeMapLink" target="_blank" href="https://www.bing.com/maps?cp=7.11733064169853~3.7017059326171875&amp;sty=h&amp;lvl=14&amp;FORM=MBEDLD">View Larger Map</a> &nbsp; | &nbsp;
                <a id="dirMapLink" target="_blank" href="https://www.bing.com/maps/directions?cp=7.11733064169853~3.7017059326171875&amp;sty=h&amp;lvl=14&amp;rtp=~pos.7.11733064169853_3.7017059326171875____&amp;FORM=MBEDLD">Get Directions</a>
            </div>
        </div>
    
<footer class="footer-distributed">

			<div class="footer-left">

				<h3><img src="./images/reallogo.png" width="50px;" height="50px;">SunFun Farms<span></span></h3>

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
        
<script src="js/bootstrap.min.js"></script>
</body>
</html>