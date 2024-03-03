<?php 
    if(isset($_GET['url'])) {
        $rawUrl = $_GET['url'];
        // echo $rawUrl;
        $path = "view/".$rawUrl.".php";
        // echo $path;
        if(file_exists($path)) {
            include $path;
        }else{
            echo "The $rawUrl is not founded";
        }
    }
?>