<div class="container" style="margin-top:7%; width:70%;">
    <div style="height: 20vh;">
        <div class="card-group">
        <?php
        require_once('database/database.php');
        $twosocietys = selectTwoSociety();
        foreach($twosocietys as $two):
        ?>
            <div class="card mb-3 m-2">
                <img src="images/<?= $two['img']?>" alt="..." style="width:100%; height: 200px">
                <div class="card-body">
                <h5 class="card-title"><?= $two['title']?></h5>
                <p class="card-text"></p>
                <p class="card-text"><small class="text-muted"><?= $two['date']?></small></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php
    
        $societys = selectAllSociety();
        foreach($societys as $society): 
    ?>
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img src="images/<?= $society['img']?>" alt="..." style="width:100%; height: 100%">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="action d-flex justify-content-end" style="margin-top: -15px; margin-bottom:15px;">
                        <a href="update_sport.php?id=<?=$society['post_id'] ?>" class="btn btn-primary btn-sm mr-2" >Edit</a>
                        <a href="delete_sport.php?category=<?=$society['category_id'] ?>&id=<?=$society['post_id'] ?>" class="btn btn-danger btn-sm">X</a>
                    </div>
                    <h5 class="card-title"><?= $society['title']?></h5>
                    <p class="card-text"></p>
                    <p class="card-text" style="margin-top: -20px"><small class="text-muted"><?= $society['date']?></small></p>
                    <hr>
                    <p style="font-size: 15px; color: #81858c; margin-top: -10px"><?= $society['title']?></p>
                    <a href="pages/detail.php?category=<?=$society['category_id'] ?>&id=<?=$society['post_id'] ?>" class="btn btn-danger btn-sm">DETAIL</a>
                </div>
            </div>
            
        </div>
    </div>
    <?php endforeach; ?>
</div>