<?php 
    // if(isset($_GET['url'])) {
        $rawUrl = $_GET['url'];
        echo $rawUrl;
    //     $path = "view/".$rawUrl.".php";
    //     // echo $path;
    //     if(file_exists($path)) {
    //         include $path;
    //     }else{
    //         echo "The $rawUrl is not founded";
    //     }
    // }

    // routing using switch case, ussualy is used by simple application

    if(isset($_GET['url'])) {
        $rawUrl = $_GET['url'];
        $path = "view/".$rawUrl.".php";

        switch($rawUrl) {
            case "":
                include ("view/home.php");
                break;
            case "home":
                $data = ["title"=>"H O M E P A G E"];
                include $path;
                break;
            case "about":
                $data = ["title"=>"A B O U T P A G E"];
                include $path;
                break;
            default:
                echo "The page is not founded";
        }
    }
?>