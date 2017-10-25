<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("Location: ./?p=404");
    exit;
} else {
    extract($_POST);
    extract($_GET);
    $tv = isset($tvibge) ? 1 : 0;
    $web = isset($webcast) ? 1 : 0;
    $ext = isset($webexterna) ? $webexterna : 'http://viz-wcs.voxeldigital.com.br/?CodTransmissao=';
    $pdo = conectar();
    $i = 1;
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
        $pdo = null;
        $stmt = null;
        echo $stmt->errorCode();
        exit;
    } elseif (isset($aprovar)) {
        $stmt = null;
        $i = 1;

        $evento = evento::gerarEventoID($id);
        extract($evento);

        $query = insertPrimeiraSessao();
        $stmt = $pdo->prepare($query);

        $stmt->bindValue($i++, $id);
        $stmt->bindParam($i++, $titulo);
        $stmt->bindParam($i++, $dt_inicio);
        $stmt->bindParam($i++, $hr_inicio);
        $stmt->bindParam($i++, $hr_final);

        $result = $stmt->execute();

        if (!$result) {
            $pdo = null;
            $stmt = null;
            echo $stmt->errorCode();
            exit;
        } else {
            header("Location: ./?p=pv&m=a");
            exit;
        }
    } elseif (isset($reprovar)) {
        $pdo = null;
        $stmt = null;
        header("Location: ./?p=agv&m=r");
        exit;
    }
}
?>