<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header("Location: ./?p=404");
    exit;
}else{
    $pdo = conectar();
    extract($_GET);
    
    
}
?>

