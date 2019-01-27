<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charest="utf-8">
		<meta name="description" content="This is an example of a meta description. This will often show up in search results.">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>INeedPianoNow</title>
		<link rel="stylesheet" href="css/header.css" <?php echo '?'.mt_rand(); ?>" 
	</head>
	<body>
	
	
		<header>
			<nav class="nav-header-main">
				<a class="header-logo" href="index.php">
					<img src="img/logoo.png" alt="logo">
				</a>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="service.php">Service</a></li>
					<li><a href="producers.php">Producers</a></li>
					<li><a href="newsandevents.php">News & Events</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="myorders.php">My orders</a></li>
				</ul>
				<div class="header-login">
					<?php
						if(isset($_SESSION['usersId']))
						{
							echo '<form action="includes/logout.inc.php" method="post"> <!--"post" for security-->
							<button type="submit" name="logout-submit">Logout</button>
							</form>';
						}
						else
						{
							echo '<form action="includes/login.inc.php" method="post"> <!--"post" for security-->
							<input type="text" name="mailuid" placeholder="Username/E-mail...">
							<input type="password" name="pwd" placeholder="Password...">
							<button type="submit" name="login-submit">Login</button>
							</form>
							<a href="signup.php" class="header-signup">Signup</a>';
						}
				?>
				</div>
			</nav>
		</header>