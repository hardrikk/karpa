<?php

function conectar() {
    $servidor = 'wmysdes01v';
    $bd = 'tresta';
    $login = 'tresta';
    $senha = 'Ibge2016';

    $pdo = new PDO("mysql:host=$servidor;dbname=$bd", "$login", "$senha");
    if (!$pdo) {
        die('Erro ao criar a conexão');
    }
    
    $pdo->query("SET NAMES 'utf8'");
    $pdo->query("SET character_set_connection=utf8");
    $pdo->query("SET character_set_client=utf8");
    $pdo->query("SET character_set_results=utf8");
    
    return $pdo;





//    conexao com mysqli
//    $con = mysqli_connect($servidor, $login, $senha, $bd);
//    if (!$con) {
//        die("Falha na conexão" . mysqli_connect_error());
//    }
//    mysqli_query($con, "SET NAMES 'utf8'");
//    mysqli_query($con, 'SET character_set_connection=utf8');
//    mysqli_query($con, 'SET character_set_client=utf8');
//    mysqli_query($con, 'SET character_set_results=utf8');
//
//    return $con;
}
