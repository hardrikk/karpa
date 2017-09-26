<?php
include 'php/util/conexao.php';
include 'php/util/querys.php';
include 'php/util/funcao.php';
include 'php/class/evento.php';
include "php/class/form.php";
include "php/class/admin.php";

if (session_id() == ""){
    session_start();
}


