<?php
/**
 * Created by PhpStorm.
 * User: GONBE
 * Date: 2019/03/23
 * Time: 15:15
 */

$videoId = $_POST('videoId');
$currentTime = $_POST('currentTime');
$comment = $_POST('comment');

require_once 'database_conf.php';
$sql = 'INSERT INTO comments (comment, userId, videoId, currentTime, stamp) VALUES (:comment, :userId, :videoId, :currentTime, NOW())';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':comment', $comment, \PDO::PARAM_STR);
$stmt->bindValue(':userId', $_SESSION['id'], \PDO::PARAM_INT);
$stmt->bindValue(':videoId', $videoIdd, \PDO::PARAM_INT);
$stmt->bindValue(':currentTime', $currentTime, \PDO::PARAM_INT);
$stmt->execute();

echo 'ok';