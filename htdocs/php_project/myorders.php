

<?php
require "header.php";
require 'includes/dbh.inc.php';
?>
<body>
<link rel="stylesheet" href="css/myorders.css">
</body>
<?php
if(isset($_SESSION['usersId']))
{
	$sql="SELECT * FROM orders WHERE clientId='".$_SESSION['usersId']."';";
	$result = mysqli_query($conn, $sql);
	$i = 1;
	while($row = mysqli_fetch_assoc($result))
	{
		$sql2="SELECT * FROM products WHERE idProducts = ".$row['productId'].";";
		$product = mysqli_fetch_assoc(mysqli_query($conn, $sql2));
		echo '<div class="order_details">';
		echo '<p class="order">Order id: '.$row['idOrders'].'</p></br>';
		echo '<p class="order">Product: '.$product['manufacturerProducts'].' '.$product['typeProducts'].'</p></br>';
		echo '<p class="order">Quantity: '.$row['productQuantity'].'</p></br>';
		echo '<p class="order">Arrival on: '.$row['orderStart'].' to '.$row['orderDst'].'</p></br>';
		echo '<p class="order">User notes: '.$row['orderDesc'].'</p></br>';
		echo '<form action="deleteorder.php" method="get"><button type="submit" name="delete" value="'.$row['idOrders'].'">Delete order ^</button></form>';
		echo '</br></div>';
	$i= $i+1;
	}
}	
else
{
	echo '<br><br><br><p class="login-status">Log in first!!!</p>';
}