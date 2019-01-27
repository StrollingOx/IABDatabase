<head>
<link rel="stylesheet" href="css/details.css">
</head>

<?php
	require "header.php";
	require "includes/dbh.inc.php";

	$sql=" SELECT * FROM products WHERE idProducts =".$_GET['product_details']." ;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<div class='details'>";
			echo "<img src='img/product".$row['idProducts'].".jpg'><br><br>";
			echo "<p class='flav'>Manufacturer: ".$row['manufacturerProducts']."</p><br>";
			echo "<p class='flav'>Type: ".$row['typeProducts']."</p><br>";
			echo "<p class='flav'>Mechanics: ".$row['mechanicsProducts']."</p><br>";
			echo "<p class='flav'>Production year: ".$row['yearProducts']."</p><br>";
			echo "<p class='flav'>Serial number: ".$row['serialProducts']."</p><br>";
			echo "<p class='flav'>Product price: $".bcdiv($row['priceProducts'], 1,2)."</p><br>";
			echo "</div>";
		}
	}
	else
	{
		echo "ERR404 - Item not found";
	}



	require "footer.php";
?>