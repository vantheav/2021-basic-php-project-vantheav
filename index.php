<?php 
    include_once("partial/header.php");
    include_once("partial/navbar.php");
    if(isset($_GET['page'])){
        if($_GET['page'] == "home"){
            include_once('pages/home.php');
        }elseif($_GET['page'] == 'society'){
            include_once('pages/society.php');
        }elseif($_GET['page'] == 'sport'){
            include_once('pages/sport.php');
        }elseif ($_GET['page'] == "technology"){
            include_once('pages/technology.php');
        }elseif ($_GET['page'] == "create"){
            include_once('process/create.php');
        }elseif ($_GET['page'] == "search"){
            include_once('pages/search.php');
        }
    }else {
        include_once('pages/home.php');
    }

    include_once("partial/footer.php");