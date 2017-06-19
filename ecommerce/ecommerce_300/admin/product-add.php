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
                            Add Product
                        </h1>
						<form method="post" action="product-process.php" enctype="multipart/form-data" class="form form-horizontal">
							<div class="form-group">
								<label for="">Product Title:</label>
								<input type="text" class="form-control" name="product_title" required id="product_title">
							</div>
							<div class="form-group">
								<label for="">Product Summary:</label>
								<textarea name="summary" id="summary" class="form-control" required style="resize: vertical;"></textarea>
							</div>
							<div class="form-group">
								<label for="">Product Description:</label>
								<textarea name="description" id="description" class="form-control" required style="resize: vertical;"></textarea>
							</div>
							<div class="form-group">
								<label for="">Price:</label>
								<input type="number" min="0" class="form-control" name="price" id="price" required />
							</div>
							<div class="form-group">
								<label for="">Discount:</label>
								<input type="number" min="0" class="form-control" id="discount" name="discount" required />
							</div>
							<div class="form-group">
								<label for="">Status:</label>
								<select name="status" id="status" class="form-control" required>
									<option value="1">Active</option>
									<option value="0">Inactive</option>
								</select>
							</div>
							<div class="form-group">
								<label for="">Vendor Information:</label>
								<textarea name="vendor_info" id="vendor_info" rows="5" class="form-control" style="resize:  vertical;"></textarea>
							</div>
							<div class="form-group">
								<label for="">Stock:</label>
								<input type="number" min="0" class="form-control" id="stock" name="stock"  step="1" />
							</div>
							<div class="form-group">
								<label for="">Deliver Cost(In NPR.):</label>
								<input type="number" min="0" class="form-control" id="delivery_cost" name="delivery_cost" />
							</div>
							<div class="form-group">
								<label for="">Images:</label>
								<input type="file" name="product_images[]" multiple />
							</div>
							<div class="form-group">
								<input type="submit" name="submit" value="Add Product" class="btn btn-primary" />
							</div>
						</form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12"> 
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
$scripts = '<script type="text/javascript" src="'.PLUGINS_URL.'tinymce/tinymce.min.js"></script>';
include 'include/footer.php';?>
<script type="text/javascript">
	tinymce.init({
		selector: '#description, #vendor_info'
	})
</script>