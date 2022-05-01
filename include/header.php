<!DOCTYPE html>
<head>
	
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script> 

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
	
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-info bg-info">
		<h4 class="text-white">HOSPITAL MANAGEMENT SYSTEM</h4>

		<div class="mr-auto"></div>

		<ul class="navbar-nav">
				
			<?php

				if(isset($_SESSION['admin'])){
					
					$user = $_SESSION['admin'];

					echo '
					<li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a></li>
					<li class="nav-item"><a href="logout" class="nav-link text-white">log out</a></li>
					';

				}
				else{
					echo '
					<li class="nav-item"><a href="adminlogin.php" class="nav-link text-white">Admin</a></li>
					<li class="nav-item"><a href="#" class="nav-link text-white">Doctor</a></li>
					<li class="nav-item"><a href="#" class="nav-link text-white">Patient</a></li>
					';
				}
			?>
			
		</ul>
		
	</nav>


</body>


</html>