<?php  
include("includes/db-config.php");
include("includes/headerfooter.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us at EcoBuddy</title>
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
	<link rel="stylesheet" media="screen" href="css/contact.css"/>
	<link rel="stylesheet" media="screen" href="css/resphomepage.css"/>
</head>
<body>
	<div class="navbar">
	  <a href="homepage.php">Home</a>
	  <a href="ecoquiz.php">Quiz</a>
	  <a href="aboutus.php">About Us</a>
	  <a href="contactus.php">Contact</a>
	</div>

	<h1 class="heading">Contact Us at EcoBuddy</h1>
	<h4>Please fill out the contact form below:</h4>
	
	<form id="contactfm" action="process-contactus.php" enctype="multipart/form-data" method="POST">
		<br>firstname: <input name="firstname" type="text" placeholder="Eco" required/></br>
		<br>lastname: <input name="lastname" type="text" placeholder="Warrior" required/></br>
		<br>email: <input name="email" type="email" placeholder="ecowarrior@gmail.com" required/></br>
		<br>Category of Interest:
		<br><input name="interest" type="text" placeholder="My Carbon footprint etc"/></br>
		<br>Comments for us at EcoBuddy:
		<br><textarea name="comments" minlength="10" maxlength="250" rows="4" placeholder="Tell us what you think.."></textarea></br>
		<p><input id="sendcontact" type="submit"/></p>
	</form>

	<h5 style="color: #479027;">"We can change the world and make it a better place. It is in your hands to make a difference" - Nelson Mandela</h5>

	<section id="output"></section>
	<br>

	<br>
	<div class="footer">
  	<h2>EcoBuddy - Do what you can</h2>
	</div>
	
	<button onclick="topFunction()" id="topBtn" title="Go to top">Go to Top of Page</button>
	<script src="javascript/contact.js" type="text/javascript"></script>
</body>
</html>