<?php
/**
 * Created by PhpStorm.
 * User: GONBE
 * Date: 2019/03/23
 * Time: 12:13
 */

// smarty のライブラリを読み込みます
require_once __DIR__ . '/libs/Smarty.class.php';

// smartyを宣言して設定を書き加えます
$smarty = new Smarty();
$smarty->escape_html = true;
$smarty->template_dir = __DIR__ . '/templates';
$smarty->compile_dir = __DIR__ . '/templates_c';

//if(isset($_SESSION['login'])==false){
//    header('Location: false.html');
//}

$smarty->display('menu.tpl');