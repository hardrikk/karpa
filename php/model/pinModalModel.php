<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    extract($_POST);
    extract($_GET);
    
    $pdo = conectar();
    
    $query = selectPinEvento();
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":pin", $pin);
    $stmt->execute();
    if($stmt->rowCount() == 1){
        if($a == 'ed'){
            header("Location: ./?p=ev&id=$id");
            exit;
        }elseif($a == 'ex'){
            header("Location: ./?p=?&id=$id");
            exit;
        }
    }else{
        header("Location: ./?p=agv&m=pi");
        exit;
    }
}
?>
