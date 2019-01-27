<?php
require 'includes/dbh.inc.php';

	$sql="DELETE FROM orders WHERE idOrders='".$_GET['delete']."';";
	$stmt=mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql))
	{
		header("Location: myorders.php?orderdelete=failed");
		exit();
	}
	else
	{
		mysqli_stmt_execute($stmt);
		header("Location: myorders.php?orderdelete=success");
	}
	
?>