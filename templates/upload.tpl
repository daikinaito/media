<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>動画投稿画面</title>
</head>
<body>
ようこそ{$name}さん
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="title"><br>
        <input type="file" name="file">
        <input type="submit" value="ファイルをアップロードする">
    </form>
    <video id="mv" controls autobuffer>
        <source src="videos/ScreenRecording_02-09-2018 17-32-25.mp4">
        <p>HTML5に対応していません。</p>
    </video>
</body