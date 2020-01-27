<?php  
include("includes/db-config.php");
include("includes/headerfooter.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EcoBuddy Homepage</title>
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
	<link rel="stylesheet" media="screen" href="css/aboutus.css"/>
	<link rel="stylesheet" media="screen" href="css/resphomepage.css"/>

</head>

<body>

<!-- Navigation Bar -->
<div class="navbar">
  <a href="homepage.php">Home</a>
  <a href="ecoquiz.php">Quiz</a>
  <a href="aboutus.php">About Us</a>
  <a href="contactus.php">Contact</a>
</div>

<!-- The flexible grid (content) -->
<div class="row">
  <div class="side">
    <h2>About EcoBuddy and our efforts</h2>
    <h3>We're just like anyone else with an interest in the environment..</h3>
    <h3>Our Home in Guelph</h3>
    <div class="ourhome"></div>
    <p>A small bungalow that is more than we need but not extravagant..</p>
    <h3>Our Vegetable patch in the back yard</h3>
    <div class="ourveg"></div>
    <p>A small veg patch that contributes to our fresh veg in the summer..</p>
    <h3>Our Pets</h3>
    <div class="ourpets"></div>
    <p>The only meat eaters in the house, we rescued both these little guys and for anyone wondering, yes they're great stress relievers from IMM coursework..</p>
  </div>
  <div class="main">
    <h2>Things that we have managed to incorporate at home so far</h2>
    <h5>As of Christmas 2019</h5>
    <div class="listitems"/></div>
    <p>We are always trying to improve, but here's some things we've had success with that are easy to implement:</p>
    <p id="ourlist">
      <ul style="list-style: none;">
        <li>We buy as many of our goods locally as we can</li>
        <li>We always use recyclable multi-use bags when shopping</li>
        <li>We try to reduce our plastic consumption wherever possible through bulk purchased and using hessian bags for vegetables etc</li>
        <li>We divide up our recycling and clean it accordingly for processing</li>
        <li>We have more than 50% LED fittings in our house presently, aiming for 100%</li>
      </ul>
    </p>
  </div>
</div>

<h5 style="color: #479027;">"If you think you are too small to make a difference, try spending the night in a closed room with a mosquito" - African saying</h5>


<br>
<div class="footer">
    <h2>EcoBuddy - Do what you can</h2>
</div>

<button onclick="topFunction()" id="topBtn" title="Go to top">Go to Top of Page</button>

<script src="javascript/aboutus.js" type="text/javascript"></script>

</body>
</html>