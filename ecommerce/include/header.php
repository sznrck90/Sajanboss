<?php /**
 * @Author: Sandesh Bhattarai
 * @Date:   2017-06-06 17:08:24
 * @Organization: Knockout System Pvt. Ltd.
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo (isset($pageName) && $pageName != "")? $pageName : PAGE_TITLE;?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo CSS_URL;?>bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo CSS_URL;?>sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo FONT_AWESOME;?>css/font-awesome.min.css" rel="stylesheet" type="text/css">

    
    <!-- jQuery -->
    <script src="<?php echo JS_URL;?>jquery.js"></script>

</head>

<body>