<?php

//FUNÇÃO PARA VALIDAR CAMPOS
function validarCampo($campo) {
    $campoVal = isset($campo) && trim($campo) ? trim($campo) : '';
    return $campoVal;
}

//FUNÇÃO PARA VALIDAR CHECKBOX
function validarCheck($campo) {
    $campoVal = isset($campo) && trim($campo) ? 1 : 0;
    return $campoVal;
}

function convertData($data) {
    $data = implode("/", array_reverse(explode("-", $data)));
    return $data;
}

function convertData2($data) {
    $data = implode("-", array_reverse(explode("/", $data)));
    return $data;
}

function convertHora($hora) {
    $hora = substr($hora, 0, 5);
    return $hora;
}

function uniqueAlfa($length = 6) {
    $salt = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $len = strlen($salt);
    $pass = '';
    mt_srand(10000000 * (double) microtime());
    for ($i = 0; $i < $length; $i++) {
        $pass .= $salt[mt_rand(0, $len - 1)];
    }
    return $pass;
}

function estarLogado() {
    if (isset($_SESSION["logado"])) {
        return true;
    } else {
        return false;
    }
}

function usuarioLogado() {
    if (isset($_SESSION["logado"])) {
        $usu = unserialize($_SESSION["logado"]);
        return $usu;
    } else {
        return "";
    }
}

function ref() {
    $ref = isset($_SERVER["HTTP_REFERER"]) ? explode("?", $_SERVER["HTTP_REFERER"]) : '';
    $ref = isset($ref[1]) ? $ref[1] : '';
    $ref = explode("&", $ref);
    $ref = $ref[0];
    return $ref;
}

function verificarAcesso() {
    if (!estarLogado()) {
        header("Location: ./?p=404");
        exit;
    }
}

?>