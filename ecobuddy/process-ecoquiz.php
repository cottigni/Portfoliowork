<?php session_start();

include("includes/db-config.php");


//receive user variables from registration form
$userId = $_SESSION['userId'];
$name = $_GET['name'];
$email = $_GET['email'];
$elecveh = $_GET['elecveh'];
$hybveh = $_GET['hybveh'];
$transit = $_GET['transit'];
$homework = $_GET['homework'];
$recycle = $_GET['recycle'];
$pwrstrip = $_GET['pwrstrip'];
$leds = $_GET['leds'];
$solar = $_GET['solar'];
$vegpatch = $_GET['vegpatch'];
$vegan = $_GET['vegan'];
$compost = $_GET['compost'];
$waterbot = $_GET['waterbot'];
$zerow = $_GET['zerow'];
$reusebags = $_GET['reusebags'];
$rechargebatts = $_GET['rechargebatts'];
$sum_total = +$elecveh+$hybveh+$transit+$homework+$recycle+$pwrstrip+$leds+$solar+$vegpatch+$vegan+$compost+$waterbot+$zerow+$reusebags+$rechargebatts;



$stmt = $pdo->prepare("
	INSERT INTO `users` 
		(`userId`, `name`, `email`, `elecveh`, `hybveh`, `transit`, `homework`, `recycle`, `pwrstrip`, `leds`, `solar`, `vegpatch`,`vegan`, `compost`, `waterbot`, `zerow`, `reusebags`, `rechargebatts`,`sum_total`) 

	VALUES (NULL, '$name', '$email', '$elecveh', '$hybveh', '$transit', '$homework', '$recycle','$pwrstrip', '$leds', '$solar', '$vegpatch', '$vegan', '$compost', '$waterbot','$zerow', '$reusebags', '$rechargebatts','$sum_total');");

$stmt->execute();

header("Location: yourresults.php");


?>