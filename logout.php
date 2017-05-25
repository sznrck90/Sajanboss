<?php /**
 * @Author: Sandesh Bhattarai
 * @Date:   2017-05-24 16:15:31
 * @Organization: Knockout System Pvt. Ltd.
 */
session_start();
session_destroy();
if(isset($_COOKIE['login_info']) && $_COOKIE['login_info'] !=""){
	setcookie("login_info","",time()-60);
}
header('location: login.php');
?>
