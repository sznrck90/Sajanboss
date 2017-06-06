<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Category Add Page</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
</head>
<body>
	<div class="container">
		<div class="row">
			<form method="post" action="category-process.php">
				<div class="form-group">
					<label>Category Title</label>
					<input type="text" name="category_title" required class="form-control" />
				</div>
				<div class="form-group">
					<label>Category Summary</label>
					<textarea name="summary" id="summary" class="form-control" style="resize: vertical;"></textarea>
				</div>
				<div class="form-group">
					<label>Category Description</label>
					<textarea name="description" id="description" class="form-control" style="resize: vertical;"></textarea>
				</div>
				<div class="form-group">
					<label>Status</label>
					<select name="status" class="form-control" id="status" required>
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
</body>
</html>