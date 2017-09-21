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

function convertData($data){
    $data = implode("/", array_reverse(explode("-", $data)));
    return $data;
}
function convertData2($data){
    $data = implode("-", array_reverse(explode("/", $data)));
    return $data;
}
function convertHora($hora){
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
?>