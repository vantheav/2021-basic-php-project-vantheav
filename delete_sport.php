<?php 
    require_once('database/database.php');
    $id = $_GET['id'];
    $category = $_GET['category'];
    $isDeleted = deletePost($id);

    
    if($isDeleted) {
        if($category == 1){
            header('location: index.php?page=society');
        }elseif($category == 2){
            header('location: index.php?page=sport');
        }elseif($category == 3){
            header('location: index.php?page=technology');
        }
    }