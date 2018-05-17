
<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Home</h2>
		<?php 
		// use "isset()" function to chage any content on any page when a user is logged in. 
			if (isset($_SESSION['u_id'])){
				# code...
				echo "You are logged in!";
			}
		?>
	</div>
</section>

<?php
	include_once 'footer.php';
?>

