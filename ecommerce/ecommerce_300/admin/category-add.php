<?php include 'include/session.php'; ?>
<?php include 'include/config.php';?>
<?php include 'include/header.php';?>
    <div id="wrapper">
        <?php include 'include/navigation.php';?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <?php include 'include/notifications.php';?>
                        <h1 class="page-header">
                            Add Category
                        </h1>
						<div class="col-md-12 col-lg-12">
							<form method="post" action="category-process.php">
								<div class="form-group">
									<label for="">Category Title: </label>
									<input type="text" name="category_title" class="form-control" id="category_title" required />
								</div>
								<div class="form-group">
									<label for="">Summary</label>
									<textarea name="summary" class="form-control" id="summary" style="resize: vertical;" rows="5"></textarea>
								</div>
								<div class="form-group">
									<label for="">Description</label>
									<textarea name="description" class="form-control" id="description" style="resize: vertical;"></textarea>
								</div>
								<div class="form-group">
									<label for="">Status:</label>
									<select name="status" id="status" required class="form-control">
										<option value="1">Active</option>
										<option value="0">Inactive</option>
									</select>
								</div>
								<div class="form-group">
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
