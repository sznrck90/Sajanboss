<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
	<script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>
<body >
	<div class="container">
		<div class="row">
			<?php 
				if(isset($_SESSION['message']) && $_SESSION['message'] != ""){
					echo $_SESSION['message'];
				}
				$_SESSION['message'] = "";

				echo $_COOKIE['login_info'];
			?>
			<a href="logout.php" class="btn btn-danger">Logout</a>
		</div>
	</div>
</body>
</html>
