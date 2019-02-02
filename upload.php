<?php

if($_FILES['video']){
  move_uploaded_file($_FILES['video']['tmp_name'], '/home/ec2-user/media/videos');
}
?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="video">
    <input type="submit" value="ファイルをアップロードする">
</form>
