<?php /**
 * @Author: Sandesh Bhattarai
 * @Date:   2017-06-05 16:11:40
 * @Organization: Knockout System Pvt. Ltd.
 */

include 'dbconnect.php';
include 'include/function.php';


if(isset($_POST['submit']) && $_POST['submit'] != ""){
	$data = array();
	$data['category_title']  = sanitizeString($_POST['category_title']);
	$data['summary']  = sanitizeString($_POST['summary']);
	$data['description']  = sanitizeString($_POST['description']);
	$data['status']  = sanitizeString($_POST['status']);
	
$last_insert = addCategory($data,true);

	debugger($_POST,true);	

} else {
	$_SESSION['error'] = "Invalid access";
	@header('location: category-add.php');
	exit;
}
?>
