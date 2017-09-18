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

?>
