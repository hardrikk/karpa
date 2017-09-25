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
    
    $query = updateEvento();
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(1, $evento->getTitulo());
    $stmt->bindParam(2, $evento->getDesc_evento());
    $stmt->bindParam(3, $evento->getDtinicio());
    $stmt->bindParam(4, $evento->getDtfinal());
    $stmt->bindParam(5, $evento->getTitulo());
    $stmt->bindParam(1, $evento->getTitulo());
    $stmt->bindParam(1, $evento->getTitulo());
    $stmt->bindParam(1, $evento->getTitulo());
    $stmt->bindParam(1, $evento->getTitulo());
    $stmt->bindParam(1, $evento->getTitulo());
    $stmt->bindParam(1, $evento->getTitulo());
}

