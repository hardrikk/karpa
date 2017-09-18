<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header("Location: ./?p=404");
    exit;
}else{
    $con = conectar();
    $obpost = (object)$_POST;
    $evento = new evento($obpost);
    echo $evento->getChat();
    
}

