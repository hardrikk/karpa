<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("Location: ./?p=404");
    exit;
} else {
    $pdo = conectar();

    $obpost = (object) $_POST;
    $evento = new evento();
    $evento->validadarEvento($obpost);
    extract($_GET);

    $query = updateEventoAdm();
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(1, $evento->getTitulo(), PDO::PARAM_STR);
    $stmt->bindParam(2, $evento->getDesc_evento(), PDO::PARAM_STR);
    $stmt->bindParam(3, $evento->getDtinicio(), PDO::PARAM_STR);
    $stmt->bindParam(4, $evento->getDtfinal(), PDO::PARAM_STR);
    $stmt->bindParam(5, $evento->getHrinicio(), PDO::PARAM_STR);
    $stmt->bindParam(6, $evento->getHrfinal(), PDO::PARAM_STR);
    $stmt->bindParam(7, $evento->getUorg(), PDO::PARAM_INT);
    $stmt->bindParam(8, $evento->getLocal(), PDO::PARAM_INT);
    $stmt->bindParam(9, $evento->getResponsavel(), PDO::PARAM_STR);
    $stmt->bindParam(10, $evento->getEmail(), PDO::PARAM_STR);
    $stmt->bindParam(11, $evento->getTelefone(), PDO::PARAM_STR);
    $stmt->bindParam(12, $evento->getRamal(), PDO::PARAM_STR);
    $stmt->bindParam(13, $evento->getCelular(), PDO::PARAM_STR);
    $stmt->bindParam(14, $evento->getSlide(), PDO::PARAM_INT);
    $stmt->bindParam(15, $evento->getChat(), PDO::PARAM_INT);
    $stmt->bindParam(16, $evento->getPerguntas(), PDO::PARAM_INT);
    $stmt->bindParam(17, $evento->getEnquete(), PDO::PARAM_INT);
    $stmt->bindParam(18, $evento->getObservacao(), PDO::PARAM_STR);
    $stmt->bindParam(19, $evento->getSede(), PDO::PARAM_INT);
    $stmt->bindParam(20, $evento->getUe(), PDO::PARAM_INT);
    $stmt->bindParam(21, $evento->getAgencia(), PDO::PARAM_INT);
    $stmt->bindParam(22, $evento->getExterno(), PDO::PARAM_INT);
    $stmt->bindParam(23, $evento->getDesc_publi(), PDO::PARAM_STR);
    $stmt->bindParam(24, $evento->getTvibge(), PDO::PARAM_INT);
    $stmt->bindParam(25, $evento->getWebcast(), PDO::PARAM_INT);
    $stmt->bindParam(26, $evento->getWebexterno(), PDO::PARAM_STR);
    $stmt->bindParam(27, $id);
    
    
    $result = $stmt->execute();

    if (!$result) {
        echo $stmt->errorCode();
        exit;
    } else {
        $pdo = null;
        $stmt = null;
        header("Location: ./?p=pv&m=e");
        exit;
    }
}



