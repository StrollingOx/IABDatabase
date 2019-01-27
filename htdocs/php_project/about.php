<?php
	require "header.php";
?>

	<main>
		<?php
			echo "	INeedPianoNow is a VERY simple project in PHP language along with some SQL, HTML and styling in CSS.</br>
				The site allows You to register, log in and log out (you can't register on the same email/username twice)</br>
				After logging in You are able to enter 'Service' tab, where you can rent your instrument.</br>
				There are only 3 instruments (You can add more via http://localhost/phpmyadmin/ ) and they are in infinite quantity.</br>
				If you want to rent an instrument just simply click on the button under desired one record. The click will add the order to the database.</br>
				The cost of rental is 1% of the instrument original cost </br></br>
				Optional future development:</br>
					>better automatization (see ORDER.php) !! notice: partially done</br>
					>more complex 'order' (quantity of instruments, select several instruments ect.)</br>
					>add view ur orders feature</br>
					>add more contact information to the user profile (like national identification numer and phone number)</br>
					>add a contact info with a supplier/merchant to each order</br>
					>ability to buy the instrument</br>
					>add quantity of each instrument (instead being at infinite supply)</br>
					>changing currency in service.php</br>
					>add description of each product</br>
					>links to producers sites</br>
					>add real 'About' site</br>
					>css styling on other tabs ";
					?>
	
	</main>
	
<?php
	require "footer.php";
?>