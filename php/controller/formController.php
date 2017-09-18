<?php

function gerarUorg() {
    $pdo = conectar();

    $query = selectUorg();
    $sql = $pdo->query($query)->fetchAll();
    
    $listaUorg = " ";
    foreach($sql as $assoc){
        $id = $assoc['id'];
        $nome = $assoc['nome'];
        $uf = $assoc['uf'];
        $listaUorg = $listaUorg . "<option value=\"$id\" class=\"$uf\">$nome</option>";
    }
    
    $pdo = null;
    return $listaUorg;
}

function gerarLocal() {
    $pdo = conectar();

    $query = selectLocais();
    $sql = $pdo->query($query)->fetchAll();
    
    $listaLocal = " ";
    $cont = 1;
    foreach($sql as $assoc){
        $id = $assoc['id'];
        $local = $assoc['local'];
        $opcao = $cont != 8 ? 1 : 2;
        $listaLocal = $listaLocal . "<option value=\"$id\" class=\"$opcao\">$local</option>";
        $cont++;
    }
    
    $pdo = null;
    return $listaLocal;
}

?>
