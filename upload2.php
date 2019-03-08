<?php
/**
 * Created by PhpStorm.
 * User: GONBE
 * Date: 2019/03/09
 * Time: 5:54
 */

$file = 'videos/' . basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'], $file);
?>
<form action="upload.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="file">
  <input type="submit" value="ファイルをアップロードする">
</form>

<video id="mv" controls autobuffer>
    <source src="videos/ScreenRecording_02-09-2018 17-32-25.mp4">
    <p>HTML5に対応していません。</p>
</video>