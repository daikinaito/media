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

$newfilename = date("YmdHis")."-".$_FILES['file']['name'];
//$file = 'videos/' . basename($_FILES['file']['name']);

$upload = './'.$newfilename;
$userId = 1;
$commentsId = 1;

require_once 'database_conf.php';
$sql = 'INSERT INTO videos (url, title, uerId, commentsId) VALUES (:url, :title, :userId, :commentsId)';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':url', $upload, \PDO::PARAM_STR);
$stmt->bindValue(':title', $_POST['title'], \PDO::PARAM_STR);
$stmt->bindValue(':userId', $userId, \PDO::PARAM_INT);
$stmt->bindValue(':userId', $commentsId, \PDO::PARAM_INT);
$stmt->execute();

move_uploaded_file($_FILES['file']['tmp_name'], $upload);

$smarty->display('upload.tpl');