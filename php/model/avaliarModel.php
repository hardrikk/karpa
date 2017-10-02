<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("Location: ./?p=404");
    exit;
} else {
    extract($_POST);
    extract($_GET);
    $tv = isset($tvibge) ? 1 : 0;
    $web = isset($webcast) ? 1 : 0;
    $ext = isset($webexterna) ? $webexterna : '';
    $pdo = conectar();
    $i=1;
    if (isset($aprovar)) {
        $query = updateAvaliarA();
        $stmt = $pdo->prepare($query);
        $stmt->bindValue($i++, 1);
        $stmt->bindParam($i++, $tv);
        $stmt->bindParam($i++, $web);
        $stmt->bindParam($i++, $ext);
        $stmt->bindValue($i++, 1);
    } elseif (isset($reprovar)) {
        $query = updateAvaliarR();
        $stmt = $pdo->prepare($query);
        $stmt->bindValue($i++, 0);
    }
    $stmt->bindParam($i++, $id);
    $result = $stmt->execute();
    if (!$result) {
        echo $stmt->errorCode();
        exit;
    } elseif (isset($aprovar)){
        header("Location: ./?p=agv&m=a");
        exit;
    } elseif (isset($reprovar)) {
        
    }
}
?>