<?php
    include_once('../database/database.php');
    include_once('../partial/header.php');
    include_once('../partial/navbar.php');
    $id = $_GET['id'];
    $category = $_GET['category'];
    $oneData = getDetailbyID($id);
    foreach($oneData as $one):
?>
<div class="container" style="margin-top:13vh; display: flex; justify-content: center">
    <div class="card" style="width: 66%;">
    <h5 class="card-title" style="font-size: 25px; margin:  10px;"><?=$one['title'] ?></h5>
    <p style="color: #99958b;  margin: 0 10px;"><small><?=$one['date'] ?></small></p>
    <hr style="margin: 10px 10px; color:#0d3dbf">
        <img src="../images/<?=$one['img'] ?>" class="card-img-top" alt="..." style="width:100%; hieght: 20vh; padding: 20px">
        <div class="card-body">
            <p class="card-text"><?=$one['description'] ?></p>
        </div>
    </div>
</div>




<?php endforeach; 

?>