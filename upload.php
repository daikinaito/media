<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
/**
 * Created by PhpStorm.
 * User: GONBE
 * Date: 2019/02/02
 * Time: 15:49
 */
// smarty のライブラリを読み込みます
require_once __DIR__ . '/libs/Smarty.class.php';

// smartyを宣言して設定を書き加えます
$smarty = new Smarty();
$smarty->escape_html = true;
$smarty->template_dir = __DIR__ . '/templates';
$smarty->compile_dir = __DIR__ . '/templates_c';


$userId = 1;
$commentsId = 1;

require_once 'database_conf.php';
$sql = 'INSERT INTO videos2 (title, usersId, commentsId) VALUES (:title, :usersId, :commentsId)';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':title', $_POST['title'], \PDO::PARAM_STR);
$stmt->bindValue(':usersId', $userId, \PDO::PARAM_INT);
$stmt->bindValue(':commentsId', $commentsId, \PDO::PARAM_INT);
$stmt->execute();

$id = $pdo->lastInsertId('id');

$upload = 'videos/'.$id.'.mp4';

move_uploaded_file($_FILES['file']['tmp_name'], $upload);

$smarty->display('upload.tpl');