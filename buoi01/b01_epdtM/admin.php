<?php
//         echo "<pre>";
//         print_r($_POST);
//         echo "</pre>";
        
//         echo "<pre>";
//         print_r($_SERVER);
//         echo "</pre>";
        
 
        $domain = $_SERVER['HTTP_HOST'];
        header("Content-type: text/html; charset=utf-8");
        echo "Xin chào, chúc bạn một ngày vui vẻ, cảm ơn bạn đã truy cập vào website ".$domain;