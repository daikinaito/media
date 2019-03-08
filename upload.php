<?php
/**
 * Created by PhpStorm.
 * User: GONBE
 * Date: 2019/02/02
 * Time: 15:49
 */

$file = 'videos/' . basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'], $file);

$smarty->display('upload.tpl');