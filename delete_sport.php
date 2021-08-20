<?php 
    require_once('database/database.php');
    $id = $_GET['id'];

    $isDeleted = deletePost($id);
    
    if($isDeleted) {
        header('location: index.php?page=sport');
    }