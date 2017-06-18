<?php include 'include/session.php'; ?>
<?php include 'include/config.php';?>
<?php include 'Model/dbConnect.php';?>
<?php include 'include/function.php';?>
<?php $styles = '<link rel="stylesheet" type="text/css" href="'.PLUGINS_URL.'datatable/jquery.dataTables.css" />'; ?>

<?php include 'include/header.php';?>
<?php include 'Model/category.php'; ?>
    <div id="wrapper">
        <?php include 'include/navigation.php';?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <?php include 'include/notifications.php';?>
                        <h1 class="page-header">
                            Category List
                        </h1>
                        <table class="table table-bordered table-stripped" id="category-list">
                            <thead>
                                <th>S.N</th>
                                <th>Title</th>
                                <th>Summary (Trim 100 chars.)</th>
                                <th>Status</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                    $category = new Category();
                                    $allCategory = $category->getAllCategory();
                                    if($allCategory){
                                        $i =1;
                                       foreach($allCategory as $key=> $info){
                                        ?>
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $info['title'];?></td>
                                            <td><?php echo substr($info['summary'],0,100);?></td>
                                            <td>
                                                <p style="color: <?php echo ($info['status'] == 1) ? '#00FF00' : '#FF0000';?>">
                                                <?php 
                                                    echo getStatus($info['status']);
                                                ?>
                                                </p>
                                            </td>
                                            <td>

                                             <?php
                                                $url = "category-add.php?id=".$info['id']."&act=".substr(md5('edit-'.$info['id']),7,17);
                                                ?>
                                                <a href="<?php echo $url;?>" class="btn btn-success" style="border-radius: 50%"><i class="fa fa-w fa-pencil"></i></a>

                                                <?php
                                                    $url = "category-process.php?id=".$info['id']."&act=".substr(md5('del-'.$info['id']),7,17);
                                                ?>
                                                <a href="<?php echo $url;?>" style="border-radius: 50%" onclick="return confirm('Are you sure you want to delete this category?');" class="btn btn-danger"><i class="fa fa-w fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                        $i++;
                                       }
                                    }
                                ?>
                            </tbody>
                        </table>
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
$scripts = '<script type="text/javascript" src="'.PLUGINS_URL.'datatable/jquery.dataTables.min.js"></script>';

include 'include/footer.php';?>
<script type="text/javascript">
    $('#category-list').DataTable();
</script>