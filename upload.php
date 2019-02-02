<?php
/**
 * Created by PhpStorm.
 * User: GONBE
 * Date: 2019/02/02
 * Time: 15:49
 */

if($_FILES['file']){
  move_uploaded_file($_FILES['file']['tmp_name'], '/home/ec2-user/media/videos');
}
?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="file">
  <input type="submit" value="ファイルをアップロードする">
</form>