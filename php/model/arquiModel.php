<?php

$ref = ref();

if ($ref == 'p=atv') {
    $pdo = conectar();
    extract($_GET);

    $query = updateArquiEvento();
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(1, 0, PDO::PARAM_INT);
    $stmt->bindParam(2, $id, PDO::PARAM_INT);

    $result = $stmt->execute();

    if (!$result) {
        echo $stmt->errorCode();
        exit;
    } else {
        $pdo = null;
        $stmt = null;
        header("Location: ./?p=aqv&m=aq");
        exit;
    }
} else {
    header("Location: ./?p=404");
    exit;
}
?>


