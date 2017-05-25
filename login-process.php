<?php /**
 * @Author: Sandesh Bhattarai
 * @Date:   2017-05-24 15:19:27
 * @Organization: Knockout System Pvt. Ltd.
 */
session_start();
$username = "admin@admin.com";
$password = "admin";


if(isset($_POST['submit']) && $_POST['submit'] == "Login"){
	$form_username = $_POST['username'];
	$form_password = $_POST['password'];
	if($username === $form_username){
		if($form_password === $password){
			//success
			$_SESSION['message'] = "User Logged in successfully";

			/*cookie set*/
			setcookie("login_info",$form_username,time()+3600);

			$_SESSION['username'] = $username;
			header('location: home.php');
			exit;
		} else {
			//password error
			$_SESSION['message'] = "Password does not match";
			header('location: login.php');
			exit;
		}
	} else {
		//username error
		$_SESSION['message'] = "Username does not match.";
		header('location: login.php');
		exit;
	}
} else {
	//invalid login
	$_SESSION['message'] = "Invalid entry";
	header("location: login.php");
	exit;
}
?>
