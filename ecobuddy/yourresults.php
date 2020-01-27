<?php session_start();
include("includes/db-config.php");
include("includes/headerfooter.php");
?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Your Eco Quiz results</title>
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
	<link rel="stylesheet" media="screen" href="css/quizresults.css"/>
	<link rel="stylesheet" media="screen" href="css/resphomepage.css"/>
</head>
<body>
	<div class="navbar">
	  <a href="homepage.php">Home</a>
	  <a href="ecoquiz.php">Quiz</a>
	  <a href="aboutus.php">About Us</a>
	  <a href="contactus.php">Contact</a>
	</div>

<main>
	
	<?php  
		$userId =$_SESSION['userId'];

		// echo($userId);
		$stmt = $pdo->prepare("SELECT * FROM `users` WHERE `userid` = '$userId'");
		$stmt->execute();
		$row = $stmt->fetch();
		// var_dump($row);
		?>
	<div>
		<?php 
		
		echo('<h1>Nice Work Submitting your quiz</h1>');
        echo('<p>Based on your answers, your result is:');
         $total = $row["sum_total"];
        echo($total);
        echo('lbs/CO2 per year</p>')
        
        ?>

		<?php


		if ($total >= 7000){
			echo ("You're awesome and doing way better than the average Canadian");
		}else{
			echo ("You've made a great start, but check our articles for more tips on reducing your footprint");
		}
		?>
	</div>
	<div>
	<a href="homepage.php">Home</a>
	</div>
</main>

	<div class="footer">
  	<h2>EcoBuddy - Do what you can</h2>
	</div>
</body>