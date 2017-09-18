<?php
function gerarAguarEvento() {
    $pdo = conectar();

    $query = selectAguarView();

    $sql = $pdo->query($query)->fetchAll();
    
    $pdo = null;
    
    return $sql;
}

