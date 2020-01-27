<?php session_start();
//process-login.php

$name = $_GET['name'];
$email = $_GET['email'];

/**
Check the database for proper login info
If proper login info is found (username and password match),
then remember this user and consider the user logged-in.
*/
include('includes/db-config.php');

$stmt = $pdo->prepare("SELECT * FROM `users` 
	WHERE `name` = '$name'
	AND `email` = '$email'");

$stmt->execute();

$row = $stmt->fetch();
if($row){
	$_SESSION['userId'] = $row['userId'];
	$_SESSION['email'] = $row['email'];
	header("Location: yourresults.php");
}

?>