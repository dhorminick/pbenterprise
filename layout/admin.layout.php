<?php
    include('db.layout.php');
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $pageUrl = $protocol . $_SERVER['HTTP_HOST'];
    
    $GetAdminDetails = "SELECT * FROM admin";
    $GetAdminDetailsResult = $con->query($GetAdminDetails);
    if ($GetAdminDetailsResult -> num_rows > 0) {
        $admin_row = mysqli_fetch_array($GetAdminDetailsResult);
        $pb_whatsapp_no = $admin_row['pb_whatsapp_no'];
        $vision_stmt = $admin_row['vision_stmt'];
        $mission_stmt = $admin_row['mission_stmt'];
        $about_us = $admin_row['about_us'];
        
    }else{
        echo 'Error'.$con->error;
        exit();
    }
?>