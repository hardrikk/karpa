<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST' && !estarLogado()) {
    header("Location: ./p=404");
    exit;
} elseif (estarLogado() && $_SERVER['REQUEST_METHOD'] == 'GET') {
    $usu = usuarioLogado();
    $usu->logout();
    
    header("Location: ./?p=pv");
    exit;
}else{
    extract($_POST);
    $senha = md5($senha);

    $pdo = conectar();
    $query = selectLogin();
    $stmt = $pdo->prepare($query);
    $i = 1;
    $stmt->bindParam($i++, $usuario);
    $stmt->bindParam($i++, $senha);
    $stmt->execute();

    if ($stmt->rowCount() == 0) {
        $pdo = null;
        $stmt = null;
        header("Location: ./?p=lv&m=e");
        exit;
    } else {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $usu = new admin();
        $usu->logar($row);

        $pdo = null;
        $stmt = null;

        header("Location: ./?p=agv");
        exit;
    }
}
?>

