<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<!--make it resposive to screen size using bootstrap-->
	<meta name="viewport" content="width=device-width, initial-scaled=1.0">
	<!--title> School Information Management System</title-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link href="css/scrolling-nav.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
		<div class="container">
		  <a class="navbar-brand js-scroll-trigger" href="index.php">School IMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

			<div class="navbar-collapse collapse" id="navbarResponsive">
		            <ul class="navbar-nav ml-auto">			
						  <li class="nav-item">
		                  <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
		                  </li> 
		                
		                  <li class="nav-item">
		                  <a class="nav-link js-scroll-trigger" href="#about">About</a>
		                  </li>
		            
		                  <li class="nav-item">
		                  <a class="nav-link js-scroll-trigger" href="#blog">Blog</a>
					      </li>
								
						  <li>
						  	<a href="signup.php" class="btn" style="padding-top:10px;color:#fff;">Sign up</a>
						  </li>
					</ul>
					<?php  
						if (isset($_SESSION['u_id'])){
							#code...

						echo '<form action="includes/logout-inc.php" method="POST">
									<button type="submit" name="submit">Logout</button>
							  </form>';
						} else{
						echo '<form action="includes/login-inc.php" method="POST">
								<input type="text" name="uid" placeholder="Username/e-mail">
								<input type="password" name="pwd" placeholder="Password">
								<button type="submit" name="submit">Login</button>
							</form>';
						}
					?>
						
			</div>
		</div>
	</nav>


<header>
</header>
</body>
</html>