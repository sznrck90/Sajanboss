<?php /**
 * @Author: Sandesh Bhattarai
 * @Date:   2017-06-06 17:36:04
 * @Organization: Knockout System Pvt. Ltd.
 */
session_start();
include 'admin/include/config.php';
include 'admin/include/function.php';
include 'admin/Model/dbConnect.php';
include 'admin/Model/user.php';

$user = new User();

if(isset($_POST['username']) && isset($_POST['password'])){	
	$user_form = $user->sanitize($_POST['username']);
	$pass_form = $_POST['password'];

	$data= $user->login($user_form);

	if($data){
		if($data['password'] === md5($pass_form)){
			$_SESSION['full_name'] = $data['full_name'];
			$_SESSION['user_id'] = $data['id'];
			$_SESSION['username'] = $data['username'];
			$_SESSION['role_id'] = $data['role_id'];
			$_SESSION['is_logged_in'] = 1;
			$_SESSION['success'] = "Hello ".$data['full_name']."! Welcome to the admin panel.";
			@header('location: admin/dashboard.php');
			exit;
		} else {
			$_SESSION['warning'] = "Password does not match";
			header("location: login.php");
			exit;
		}
	} else {
		$_SESSION['error'] = "User does not exists";
		header("location: login.php");
		exit;
	}

} else {
	$_SESSION['error'] = "Invalid Access";
	header("location: login.php");
	exit;
}



//index.php
//Welcome admin! (when success);
//failed login: login.php
//specific message
?>
