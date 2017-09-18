<?php

function gerarProxEvento() {
    $pdo = conectar();

    $query = selectProxView();

    $sql = $pdo->query($query)->fetchAll();
    
    $pdo = null;
    
    return $sql;
}
