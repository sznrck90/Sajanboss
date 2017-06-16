<?php
    session_start();
    if((!isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] != 1) || (isset($_SESSION['user_id']) && $_SESSION['user_id'] == "") ){
        $_SESSION['error'] = "Please login first";
        header('location: login.php');
        exit;
    }
?>