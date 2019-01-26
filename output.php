<?php
/**
 * Created by PhpStorm.
 * User: GONBE
 * Date: 2019/01/26
 * Time: 14:54
 */
    if(isset($_GET["target"]) && $_GET["target"] !== ""){
        $target = $_GET["target"];
    }
    else{
        header("Location: import.php");
    }
    $MIMETypes = array(
        'png' => 'image/png',
        'jpeg' => 'image/jpeg',
        'gif' => 'image/gif',
        'mp4' => 'video/mp4'
    );
    try {
        require_once 'database_conf.php';
        $sql = "SELECT * FROM video WHERE fname = :target;";
        $stmt = $pdo->prepare($sql);
        $stmt -> bindValue(":target", $target, PDO::PARAM_STR);
        $stmt -> execute();
        $row = $stmt -> fetch(PDO::FETCH_ASSOC);
        header("Content-Type: ".$MIMETypes[$row["extension"]]);
        echo ($row["raw_data"]);
    }
    catch (PDOException $e) {
        echo("<p>500 Inertnal Server Error</p>");
        exit($e->getMessage());
    }
?>