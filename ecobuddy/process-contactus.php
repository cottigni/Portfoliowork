<?php
include("includes/db-config.php");
include("includes/headerfooter.php");
//process-contact.php


//receive user variables

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$interest = $_POST['interest'];
$comments = $_POST['comments'];


//save user data into the database

$stmt = $pdo->prepare("INSERT INTO `contact_form` 
	(`userId`,`firstname`,`lastname`,`email`,`interest`,`comments`) 
	VALUES (NULL,'$firstname','$lastname','$email','$interest','$comments')");

$stmt->execute();

?>

<!DOCTYPE html>
<html>
<head>
	<title>You contacted us</title>
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
	<link rel="stylesheet" media="screen" href="css/process-contact.css"/>
	<link rel="stylesheet" media="screen" href="css/resphomepage.css"/>
</head>
<body>
	<div class="navbar">
	  <a href="homepage.php">Home</a>
	  <a href="ecoquiz.php">Quiz</a>
	  <a href="aboutus.php">About Us</a>
	  <a href="contactus.php">Contact</a>
	</div>
<p>
	<div>Thank you for your input and comments, we'll get back to you as soon as we can. Good luck with your green endeavours!</div>
	<a href="/ecobuddy/homepage.php" style="color: #479027;">Return to Home</a>
</p>

<div class="footer">
  	<h2>EcoBuddy - Do what you can</h2>
</div>
</body>
</html>
