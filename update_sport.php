<?php require_once('partial/header.php'); ?>
    <div class="container p-4">
        <?php 
            require_once('database/database.php');
            $id = $_GET['id'];
            $once = selectOneSport($id);
            foreach($once as $item):
        ?>
        <form action="update_sport_model.php" method="post">
            <input type="hidden" class="form-control" value="<?= $item['post_id'] ?>" name="id">
            <div class="form-group">
                <input type="text" class="form-control" value="<?= $item['title'] ?>" name="title">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" value="<?= $item['description'] ?>" name="description">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
<?php require_once('partial/footer.php'); ?>