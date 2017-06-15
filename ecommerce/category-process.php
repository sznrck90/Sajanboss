<?php /**

 * @Author: Sandesh Bhattarai
 * @Date:   2017-06-15 15:56:01
 * @Organization: Knockout System Pvt. Ltd.
 */
include 'include/session.php';
include 'include/config.php';
include 'Model/dbConnect.php';
include 'include/function.php';
include 'Model/category.php';
$category = new Category();


if(isset($_POST['submit']) && $_POST['submit'] != ""){
	/*debugger($_POST,true);*/
	$data = array();
	$data['category_title'] = $category->sanitize($_POST['category_title']);
	$data['summary'] = $category->sanitize($_POST['summary']);
	$data['description'] = $category->sanitize($_POST['description']);
	$data['status'] = $category->sanitize($_POST['status']);
	$data['added_by'] = $category->sanitize($_SESSION['user_id']);

	$last_insert = $category->addCategory($data);
	if($last_insert){
		$_SESSION['success'] = "Category added Successfully.";
		@header('location: category-list.php');
		exit;
	} else {
		$_SESSION['error'] = "Sorry! There was problem while adding category";
		@header('location: category-list.php');
		exit;
	}
} else {
	$_SESSION['warning'] = "Invalid access";
	@header('location: category-list.php');
	exit;
}
?>
