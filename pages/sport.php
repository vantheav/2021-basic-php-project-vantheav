<div class="container" style="margin-top:7%; width:70%;">
    <div style="height: 20vh;">
        <div class="card-group">
        <?php
        require_once('database/database.php');
        $twosports = selectTwoSport();
        foreach($twosports as $item):
        ?>
            <div class="card mb-3 m-2">
                <img src="images/<?= $item['img']?>" alt="..." style="width:95%; height: 200px">
                <div class="card-body">
                <h5 class="card-title"><?= $item['title']?></h5>
                <p class="card-text"></p>
                <p class="card-text"><small class="text-muted"><?= $item['date']?></small></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php
    require_once('database/database.php');
        $sports = selectAllSport();
        foreach($sports as $sport): 
    ?>
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img src="images/<?= $sport['img']?>" alt="..." style="width:100%; height: 200px">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="action d-flex justify-content-end" style="margin-top: -15px; margin-bottom:15px;">
                        <a href="update_sport.php?id=<?=$sport['post_id'] ?>" class="btn btn-primary btn-sm mr-2" >Edit</a>
                        <a href="delete_sport.php?id=<?=$sport['post_id'] ?>" class="btn btn-danger btn-sm">X</a>
                    </div>
                    <h5 class="card-title"><?= $sport['title']?></h5>
                    <p class="card-text"></p>
                    <p class="card-text" style="margin-top: -15px"><small class="text-muted"><?= $sport['date']?></small></p>
                    <hr>
                    <p style="font-size: 15px; color: #81858c"><?= $sport['title']?></p>
                </div>
            </div>
            
        </div>
    </div>
    <?php endforeach; ?>
</div>