<?php
	require "header.php";
	require "includes/dbh.inc.php";
?>
<head>
<link rel="stylesheet" href="css/service.css">
</head>
	<body>
			<?php
			if(isset($_SESSION['usersId']))
			{
				echo	'<h1>INeedPianoNow rentals</h1><br>';
				echo	'<h2>The INeedPianoNow service department features an extensive selection of instruments which can be rented for almost any kind of event. <br>These first-class pianos and grand pianos are regularly rented out for concerts, recordings, large events, company parties, piano competitions, anniversaries, and private occasions.</h2>';
				echo	'<h2>Our customers include renowned institutions as the Schleswig-Holstein Music Festival, the Ruhr Piano Festival, the Laeiszhalle Hamburg, and Deutsche Grammophon, to name a few. <br>But private individuals may also rent a piano or a grand piano to enrich their events.</h2>';
				
				echo	'<h2><br>Available instruments:</h2>';
				echo 	'<br>';
				
				$sql=" SELECT * FROM products;";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				$i = 1;
				if($resultCheck > 0)
				{
					echo "<div class='centre-me'>";
					while($row = mysqli_fetch_assoc($result))
					{
						echo "<img src='img/product".$i.".jpg' height='100' width='100' class='prod'>";
						echo "<p align='center'>".$i . " " . $row['manufacturerProducts'] . " ". $row['typeProducts'] . " - rent cost: " . "$". bcdiv($row['priceProducts']/100, 1,2)."</p>";
						echo "<form action='details.php?productId=".$i."' method='get' align='center'> <button type='submit' name='product_details' value=".$i.">Show details</button></form><br>";
						$i = $i + 1;
					}
					echo "<br><br><form action='rent.php' method='post' align='center'> <button type='submit' name='rent'>Rent instruments</button></form>";
					echo "</div>";
					echo '<br><br><br><p align="center">Please note - After making a rent order we will contact you about the payment.</p>';
				}
				else
				{
					header("Location: index.php?SERVICEERROR");
				}
			}
			else
			{
				echo '<br><br><br><p class="login-status">You need to log in first! :/</p>';
				
			}
			?>
	</body>
	
<?php
	require "footer.php";
?>