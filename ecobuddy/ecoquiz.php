<?php 
include("includes/db-config.php");
include("includes/headerfooter.php");

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>How Eco friendly are you?</title>
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
	<link rel="stylesheet" media="screen" href="css/ecoquiz.css"/>
	<link rel="stylesheet" media="screen" href="css/resphomepage.css"/>
</head>

<body>

	<div class="navbar">
	  <a href="homepage.php">Home</a>
	  <a href="ecoquiz.php">Quiz</a>
	  <a href="aboutus.php">About Us</a>
	  <a href="contactus.php">Contact</a>
	</div>
	<br>
	<div style="font-size: 1.2em;">If you've registered your details before, login below to see your results, otherwise please take our quiz to see how you fare:
	</div>
	<div class="login-container">
   	 	<form action="process-login.php" method="GET">
      	Name: <input style="height:4%;border-style: none;" type="text" placeholder="Joe Bloggs" name="name">&nbsp;&nbsp;
      	Email: <input style="height:4%;border-style: none;" type="text" placeholder="joeb@gmail.com" name="email">&nbsp;&nbsp;
      	<button id="logbut" type="submit">Login</button>
    	</form>
  	</div>

	<form action="process-ecoquiz.php" method="GET">
	<h2>Your details:</h2>
	Name:
	<input style="height:4%;border-style: none;margin-left:3.8%;" name="name" type="text"/><br>
	Email address:
	<input style="height:4%;border-style: none;margin-left:1%;margin-top: 0.5%;" name="email" type="email" required><br>
		<div>
			<h3>Travel Impacts</h3>
				Do you drive an electric vehicle?<input name="elecveh" type="radio" value="14000"/>yes<input name="elecveh" type="radio" value="0"/>no<br>
				Do you drive a hybrid vehicle?<input name="hybveh" type="radio" value="4400"/>yes<input name="hybveh" type="radio" value="0"/>no<br>
				Do you travel by public transit?<input name="transit" type="radio" value="1000"/>yes<input name="transit" type="radio" value="0"/>no<br>
				Do you work from home at least one day a week?<input name="homework" type="radio" value="230"/>yes<input name="homework" type="radio" value="0"/>no<br>
			<h3>Household Impacts</h3>
				Do you recycle your household waste?<input name="recycle" type="radio" value="2500"/>yes<input name="recycle" type="radio" value="0"/>no<br>
				Are you using powerstrips on your outlets wherever possible?<input name="pwrstrip" type="radio" value="1300"/>yes<input name="pwrstrip" type="radio" value="0"/>no<br>
				Are there over 50% LED bulbs in your home?<input name="leds" type="radio" value="1300"/>yes<input name="leds" type="radio" value="0"/>no<br>
				Do you have solar panels installed at home?<input name="solar" type="radio" value="6600"/>yes<input name="solar" type="radio" value="0"/>no<br>
			<h3>Food Impacts</h3>
				Do you have your own vegetable patch at home?<input name="vegpatch" type="radio" value="1800"/>yes<input name="vegpatch" type="radio" value="0"/>no<br>
				Do you eat a predominantly Vegan diet?<input name="vegan" type="radio" value="6550"/>yes<input name="vegan" type="radio" value="0"/>no<br>
				Do you have a composting system in your household?<input name="compost" type="radio" value="550"/>yes<input name="compost" type="radio" value="0"/>no<br>
				Do you utilize a re-useable water bottle daily?<input name="waterbot" type="radio" value="150"/>yes<input name="waterbot" type="radio" value="0"/>no<br>
			<h3>Shopping Impacts</h3>
				Is at least 50% of your food shopping made up of bulk or zero-waste produce?<input name="zerow" type="radio" value="450"/>yes<input name="zerow" type="radio" value="0"/>no<br>
				Do you use re-useable bags when you do your shopping?<input name="reusebags" type="radio" value="50"/>yes<input name="reusebags" type="radio" value="0"/>no<br>
				Do you use re-chargeable batteries at home?<input name="rechargebatts" type="radio" value="460"/>yes<input name="rechargebatts" type="radio" value="0"/>no<br>
				<br><input type="submit" value="Register and see your results"/>
		</div>
	</form>

	<h5 style="color: #479027;">"We must become the change we want to see in the world" - Mahatma Gandhi</h5>

	<div class="footer">
  	<h2>EcoBuddy - Do what you can</h2>
	</div>

	<button onclick="topFunction()" id="topBtn" title="Go to top">Go to Top of Page</button>

	<script src="javascript/main.js" type="text/javascript"></script>
</body>
</html>