<?php
/**
 * Created by PhpStorm.
 * User: GONBE
 * Date: 2019/02/02
 * Time: 15:49
 */

$file = 'videos/' . basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'], $file);

?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="file">
  <input type="submit" value="ファイルをアップロードする">
</form>