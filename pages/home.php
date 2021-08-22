<div class="container">
    <h2 style='margin-top:13vh;'>SOCIETY</h2><hr style="background-color: #04144d; height:2px">
    <div class="row row-cols-1 row-cols-md-4">
    <?php
    require_once('database/database.php');
        $societys = selectSocietforHome ();

        foreach($societys as $society): 
    ?>
            <div class="col mb-2">
                <div class="card">
                <img src="images/<?= $society['img']?>" class="card-img-top" alt="..." style="width: 100%; height:30vh">
                <div class="card-body">
                    <h5 class="card-title"><?= $society['title']?>"</h5>
                </div>
                </div>
            </div>
    <?php endforeach; ?>        
    </div>
    <h2 style='margin-top:5vh;'>SPORT</h2><hr style="background-color: #04144d; height:2px">
    <div class="row row-cols-1 row-cols-md-4">
    <?php
        $sports = selectSportforHome ();
        foreach($sports as $sport): 
    ?>
            <div class="col mb-2">
                <div class="card">
                <img src="images/<?= $sport['img']?>" class="card-img-top" alt="..." style="width: 100%; height:30vh">
                <div class="card-body">
                    <h5 class="card-title"><?= $sport['title']?>"</h5>
                </div>
                </div>
            </div>
    <?php endforeach; ?>        
    </div>
    <h2 style='margin-top:13vh;'>TECHNOLOGY</h2><hr style="background-color: #04144d; height:2px">
    <div class="row row-cols-1 row-cols-md-4">
    <?php
    require_once('database/database.php');
        $technologies = selectTechnologyforHome ();
        foreach($technologies as $technology): 
    ?>
            <div class="col mb-2">
                <div class="card">
                <img src="images/<?= $technology['img']?>" class="card-img-top" alt="..." style="width: 100%; height:30vh">
                <div class="card-body">
                    <h5 class="card-title"><?= $technology['title']?>"</h5>
                </div>
                </div>
            </div>
    <?php endforeach; ?>        
    </div>
</div>