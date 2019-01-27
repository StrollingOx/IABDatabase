<?php
require "header.php";
require 'includes/dbh.inc.php';
?>
<head>
<link rel="stylesheet" href="css/rent.css">
</head>
<body>
	<form action="order.php" method="get">
		<label>Quantity (1-6):</label><input type="number" name="quantity" class="product_quantity" min="1" max="6">
		<select name="productId">
			<?php 
			$sql="SELECT * FROM products;";
			$result = mysqli_query($conn, $sql);
			$i = 1;
			while($row = mysqli_fetch_assoc($result)){
				echo '<option value="'.$i.'">'.$row["manufacturerProducts"].' '.$row["typeProducts"].'</option>';
				$i= $i+1;
			}
			?>
		</select>
		<p class="flavour_1">Where should we deliver the instruments?</p><input type="text" name="place_of_delivery" placeholder="Select destination..."><br>
		<p class="flavour_1">When do you want the instruments delivered?</p><input type="date" class="dateinput" name="rent_start" value="<?php echo date("Y-m-d"); ?>"><br>
		<p class="flavour_1">When should we get it back?</p><input type="date" class="dateinput" name="rent_end" placeholder="Rent end..."><br>
		<p class="flavour_1">Any special notice?</p><textarea name="description" placeholder="Please, add any additional information"></textarea><br>
		<button type="Submit" name="submit">Submit</button>
	</form>
	
</body>


 <?php
