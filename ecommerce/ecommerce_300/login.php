<?php
    include 'admin/include/config.php';
    session_start();
    if((isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == 1) || (isset($_SESSION['user_id']) && $_SESSION['user_id'] != "") ){
        $_SESSION['success'] = "Welcome to system ".$_SESSION['name'];
        header('location: index.php');
        exit;
    }
?>
<?php include 'admin/include/header.php';?>


    <div id="wrapper">


        <div id="page-wrapper" style="max-width: 70%">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                        <?php include 'admin/include/notifications.php'; ?>
                    	<form method="post" name="login" action="login-process.php">
    						<div class="form-group">
    							<label>Username</label>
    							<input type="text" name="username" class="form-control" id="username" required />
    						</div>
    						<div class="form-group">
    							<label>Password</label>
    							<input type="password" name="password" class="form-control" id="username" required />
    						</div>
    						<div class="form-group">
    							<input type="submit" name="submit" class="btn btn-primary" id="username" required />
    						</div>
                    	</form>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
<?php include 'admin/include/footer.php';?>