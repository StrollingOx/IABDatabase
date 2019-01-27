<?php
	require "header.php";
?>

	<main>
		<div class="wrapper-main">
			<section class="section-default">
			<?php
			if(isset($_SESSION['usersId']))
			{
				echo '<p class="login-status">You are logged in!</p>';
				echo '<p class="login-status">Welcome to my modest site!</p><br><br><br><br><br><br><br>';
				?>
				<video width="100%" height="500px" controls autoplay>
				<source src="media/movie.mp4" type="video/mp4">
				
				</video>
				<?php
				
			}
			else
			{
				echo '<p class="login-status">You are logged out! Please log in first!</p>';
			}
			?>
			</section>
		</div>
	</main>
	
<?php
	require "footer.php";
?>