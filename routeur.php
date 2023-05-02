<?php


if(isset($_GET['request'])){

    $requete = $_GET['request'];
    if(isset($_GET['params'])){
        $params = $_GET['params'];
    }else{
        $params = "";
    }

}else{
    $requete = "HomeController";
}

if(file_exists("Controller/$requete.php")){
    header("Location:Controller/$requete.php?params=$params");
}else{
    header("Location:Controller/ErrorController.php");
}

