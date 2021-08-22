<?php
    /**
     * Connect to database
     */
    function db() {
        return new mysqli('localhost','root','','project');
    }


    /**
     * create posts
     */
    function createpost($value) {
        $title = $value['title'];
        $description = $value['description'];
        $img = $_FILES['file']['name'];
        $category = $value['type'];
        return db()->query("INSERT INTO `post`( `title`, `user_id`, `description`, `img`, `category_id`) 
        VALUES ('$title',1,'$description','$img','$category')");
    }
    /**
     * Select news for home page
     */
    function selectSocietforHome (){

        return db()->query("SELECT * FROM post WHERE category_id = 1 ORDER BY post_id DESC LIMIT 8");
    }

    function selectSportforHome (){

        return db()->query("SELECT * FROM post WHERE category_id = 2 ORDER BY post_id DESC LIMIT 8");
    }

    function selectTechnologyforHome (){

        return db()->query("SELECT * FROM post WHERE category_id = 3 ORDER BY post_id DESC LIMIT 8");
    }

    /**
     * Get all sport from table post
     */
    function selectAllSport() {
        return db()->query("SELECT * FROM post WHERE category_id = 2 ORDER BY post_id DESC");
    }

    /**
     * Get 2sports from table post
     */
    function selectTwoSport() {
        return db()->query("SELECT * FROM post WHERE category_id = 2 ORDER BY post_id DESC LIMIT 2");
    }
    /**
     * Delete student by id
     */
    function deletePost($id) {
        return db()->query("DELETE FROM post WHERE post_id = $id");
    }
    /**
     * Get only one on record by id 
     */
    function selectOneSport($id) {
        return db()->query("SELECT * FROM post WHERE post_id = $id");
    }

    /**
     * Update Sport
     */
    function updateSport($value) {
        $title = $value['title'];
        $description = $value['description'];
        $id = $value['id'];
        return db()->query("UPDATE post SET title = '$title', description='$description' WHERE post_id = $id");
    }
//---------------------------------------Society-------------------------------------------------------------------------//
    /**
     * Get all sport from table Society
     */
    function selectAllSociety() {
        return db()->query("SELECT * FROM post WHERE category_id = 1 ORDER BY post_id DESC");
    }
    /**
     * Get 2sports from table post
     */
    function selectTwoSociety() {
        return db()->query("SELECT * FROM post WHERE category_id = 1 ORDER BY post_id DESC LIMIT 2");
    }
//---------------------------------------Technogy-------------------------------------------------------------------------//

    /**
     * Get 2Technology from table post
     */
    function selectTwoTech() {
        return db()->query("SELECT * FROM post WHERE category_id = 3 ORDER BY post_id DESC LIMIT 2");
    }
     /**
     * Get all Technology from table post
     */
    function selectAllTech() {
        return db()->query("SELECT * FROM post WHERE category_id = 3 ORDER BY post_id DESC");
    }
    //---------------------------------------For detail-------------------------------------------------------------------------//
    function getDetailbyID ($id) {
        return db()->query("SELECT * FROM post WHERE post_id = $id");
    }
    //---------------------------------------For search-------------------------------------------------------------------------//
