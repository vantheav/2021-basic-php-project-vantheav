<div class="container" style="margin-top: 10%;">
<?php
    
            if(isset($_POST['submit'])){
                $filename = $_FILES['file']['name'];
                // $filesize = $_FILES['file']['size'];
                $filetype = $_FILES['file']['type'];
                $tmp_name = $_FILES['file']['tmp_name'];
                $typeNew = $_POST['type'];
                $dir = "images/";

                if($filetype != "image/jpeg"){
                    echo "Only JPG images allowed";
                }else{
                    move_uploaded_file($tmp_name,$dir.$filename);
                    
                }
                require_once('database/database.php');
                $isCreated = createpost($_POST);
                if($isCreated){
                    header('Location: index.php?page=home');
                }

            }
?>

        <div class="container" style="margin-top: 10%; width: 100%; height:50vh;">
            <form action="#" method="post" enctype="multipart/form-data">  
                <div class="form-group">
                    <input type="text" name="title" placeholder='Title' style="width:100%; margin-bottom: 10px;">
                    <input type="file" name="file" style="margin-bottom: 10px;">
                    <select class="custom-select" name="type" required style="margin-bottom: 10px;">
                        <option value="">Type News</option>
                        <option value="1">society</option>
                        <option value="2">sport</option>
                        <option value="3">technology</option>
                    </select>
                    <textarea name="description" cols="" rows="3" style=" width: 100%" style="margin-bottom: 10px;"></textarea>
                    <input type="submit" name="submit">
                </div>
            </form>
        </div>

</div>
           
    