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
	$data['category_id'] = $category->sanitize($_POST['category_id']);

	if($data['category_id'] == ""){
		$act = "add";
		$last_insert = $category->addCategory($data);
	} else {
		$act = "edit";
		$last_insert = $category->updateCategory($data);
	}
	if($last_insert){
		$_SESSION['success'] = "Category ".$act."ed Successfully.";
		@header('location: category-list.php');
		exit;
	} else {
		$_SESSION['error'] = "Sorry! There was problem while ".$act."ing category";
		@header('location: category-list.php');
		exit;
	}
} else if(isset($_GET['id']) && isset($_GET['act'])) {
	$id = $category->sanitize($_GET['id']);

	if($_GET['act'] === substr(md5('del-'.$id),7,17)){
		$data = $category->getCategoryById($id);
		if($data){
			$del = $category->deleteCategory($id);
			if($del){
				$_SESSION['success'] = "Category deleted successfully";
			} else {
				$_SESSION['error'] = "Sorry! There was problem while deleting data.";
			}
			@header('location: category-list.php');
			exit;
		} else {
			$_SESSION['error'] = "Sorry! There is no any data with the provided id.";
			@header('location: category-list.php');
			exit;
		}
	} else {
		$_SESSION['error'] = "Invalid id or action";
		@header('location: category-list.php');
		exit;		
	}
	debugger($_GET, true);
} else {
	$_SESSION['warning'] = "Invalid access";
	@header('location: category-list.php');
	exit;
}
?>
