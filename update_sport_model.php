<?php
    require_once('database/database.php');

    if($_SERVER['REQUEST_METHOD'] =='POST'){
        $isUpdated = updateSport($_POST);
        if($isUpdated){
            header('Location: index.php?page=sport');
        }
    }