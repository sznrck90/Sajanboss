<?php session_start();
		if(isset($_COOKIE['login_info']) && $_COOKIE['login_info'] != ""){
			header('location: home.php');
		}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
	<script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>
<body style="background: #000000;">
	<div class="container">
		<div class="row">
			<div class="col-md-10" style="background: #cccccc;">
				
				<?php 
				if(isset($_SESSION['message']) && $_SESSION['message'] != ""){
					echo $_SESSION['message'];
				}
				$_SESSION['message'] = "";
				?>
				

				<form class="form form-horizontal" method="post" action="login-process.php" >
					<div class="form-group">
						<label>Username</label>
						<input type="email" name="username" id="username" placeholder="user@name.com" required class="form-control" />
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" id="password" required class="form-control" />
					</div>
					<div class="form-group">
						<input type="checkbox" name="remember_me" value="1" id="remember_me" /> Remember Me
					</div>
					<div class="form-group">
						<input type="submit" name="submit" value="Login" class="btn btn-primary" id="submit" />
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
