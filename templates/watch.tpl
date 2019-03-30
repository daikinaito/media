<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>動画視聴画面</title>
</head>

<body>
ようこそ{$name}さん
    <form id="form" method="POST" autocomplete="off">
        <input type="text" name="comment">
        <button type="submit">送信</button>
    </form>
    <div id="result"></div>
    <script>

        document.getElementById('button').addEventListener('click', function (e) {

            let data = new FormData(document.getElementById('form'));

            fetch('http://utology-internship3/media/comment.php', {
                method: 'POST',
                body: data,
            })
                .then(function (response) {
                    return response.text();
                })
                .then(function (data) {
                    document.getElementById('result').textContent = data;
                })
                .catch(function (error) {
                    document.getElementById('result').textContent = error;
                })
        }, false)

    </script>
    <video id="mv" controls width="300" height="150">
        <script type="text/javascript" src="time.js"></script>
        <source src="videos/3.mp4">
        <p>HTML5に対応していません。</p>
    </video>
    <a href="menu.php">メニューへ</a>
</body>

</html>