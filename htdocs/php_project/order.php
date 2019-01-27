<?php
require "header.php";
require 'includes/dbh.inc.php';

if(isset($_SESSION['usersId']))
{
	$clientId = $_SESSION['usersId'];
	$productId = $_GET['productId'];
	$productQuantity = $_GET['quantity'];
	$orderDest = $_GET["place_of_delivery"];
	$orderStart =$_GET["rent_start"];
	$orderEnd = $_GET["rent_end"];
	$description = $_GET['description'];	

	
	$sql = 'INSERT INTO orders (clientId, productId, productQuantity, orderDst, orderStart, orderEnd, orderDesc) VALUES ('.$clientId.','.$productId.','.$productQuantity.',?,?,?,?);';
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql))
	{
		header("Location: service.php?error=sqlerror");
		exit();
	}
	else
	{
		
		mysqli_stmt_bind_param($stmt, "ssss", $orderDest, $orderStart, $orderEnd, $description);
		mysqli_stmt_execute($stmt);
		echo '<p>Order successful!</p>';
	}
	
}
else
{
	header("Location: ../service.php?error=nosession");
	exit();
}





require "footer.php";
