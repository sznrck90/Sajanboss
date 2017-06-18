<?php include 'include/session.php'; ?>
<?php include 'include/config.php';?>
<?php include 'include/header.php';?>
<?php 
	include 'Model/dbConnect.php';
	include 'Model/category.php';
	include 'include/function.php';
	
	$act = "add";

	if(isset($_GET['id']) && isset($_GET['act'])){
		/*debugger($_GET,true);*/
		$act = "edit";
		$category = new Category();

		$id = $category->sanitize($_GET['id']);

		if($_GET['act'] === substr(md5('edit-'.$id),7,17)){
			$data = $category->getCategoryById($id);
			if(!$data){
				$_SESSION['error'] = "Sorry! The data you tried does not exists on database";
				@header("location: category-list.php");
				exit;	
			}
		} else {
			$_SESSION['error'] = "Invalid Id specified";
			@header("location: category-list.php");
			exit;
		}

	}

?>
    <div id="wrapper">
        <?php include 'include/navigation.php';?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <?php include 'include/notifications.php';?>
                        <h1 class="page-header">
                            <?php echo ucfirst($act); ?> Category
                        </h1>
						<div class="col-md-12 col-lg-12">
							<form method="post" action="category-process.php">
								<div class="form-group">
									<label for="">Category Title: </label>
									<input type="text" name="category_title" class="form-control" id="category_title" required value="<?php echo (isset($data['title'])) ? $data['title'] : '';?>" />
								</div>
								<div class="form-group">
									<label for="">Summary</label>
									<textarea name="summary" class="form-control" id="summary" style="resize: vertical;" rows="5"><?php echo (isset($data['summary'])) ? $data['summary'] : '';?></textarea>
								</div>
								<div class="form-group">
									<label for="">Description</label>
									<textarea name="description" class="form-control" id="description" style="resize: vertical;"><?php echo (isset($data['description'])) ? $data['description'] : '';?></textarea>
								</div>
								<div class="form-group">
									<label for="">Status:</label>
									<select name="status" id="status" required class="form-control">
										<option value="1" <?php echo (isset($data['status']) && $data['status'] == 1) ? 'selected' : '';?>>Active</option>
										<option value="0" <?php echo (isset($data['status']) && $data['status'] == 0) ? 'selected' : '';?>>Inactive</option>
									</select>
								</div>
								<div class="form-group">
									<input type="hidden" name="category_id" value="<?php echo (isset($data['id'])) ? $data['id'] : '';?>" />
									<input type="submit" name="submit" class="btn btn-primary" id="submit" />
								</div>

							</form>
						</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12"> 
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $scripts = '<script type="text/javascript" src="'.PLUGINS_URL.'tinymce/tinymce.min.js"></script><script type="text/javascript">tinymce.init({ selector:"#description" });</script>
';?>
<?php include 'include/footer.php';?>
