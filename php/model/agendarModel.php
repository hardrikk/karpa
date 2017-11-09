<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("Location: ./?p=404");
    exit;
} else {
    $pdo = conectar();

    $obpost = (object) $_POST;
    $evento = new evento();
    $evento->validadarEvento($obpost);

    do {
        $pin = uniqueAlfa();
        $query = selectPin();
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":pin", $pin);
        $stmt->execute();
        $tem = $stmt->rowCount();
    } while ($tem == 1);

    $query = insertEvento();
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":titulo", $evento->getTitulo(), PDO::PARAM_STR);
    $stmt->bindParam(":desc_evento", $evento->getDesc_evento(), PDO::PARAM_STR);
    $stmt->bindParam(":dtinicio", $evento->getDtinicio(), PDO::PARAM_STR);
    $stmt->bindParam(":dtfinal", $evento->getDtfinal(), PDO::PARAM_STR);
    $stmt->bindParam(":hrinicio", $evento->getHrinicio(), PDO::PARAM_STR);
    $stmt->bindParam(":hrfinal", $evento->getHrfinal(), PDO::PARAM_STR);
    $stmt->bindParam(":uorg", $evento->getUorg(), PDO::PARAM_INT);
    $stmt->bindParam(":local", $evento->getLocal(), PDO::PARAM_INT);
    $stmt->bindParam(":nome", $evento->getResponsavel(), PDO::PARAM_STR);
    $stmt->bindParam(":email", $evento->getEmail(), PDO::PARAM_STR);
    $stmt->bindParam(":telf", $evento->getTelefone(), PDO::PARAM_STR);
    $stmt->bindParam(":ramal", $evento->getRamal(), PDO::PARAM_STR);
    $stmt->bindParam(":cell", $evento->getCelular(), PDO::PARAM_STR);
    $stmt->bindParam(":slide", $evento->getSlide(), PDO::PARAM_INT);
    $stmt->bindParam(":chat", $evento->getChat(), PDO::PARAM_INT);
    $stmt->bindParam(":pergunta", $evento->getPerguntas(), PDO::PARAM_INT);
    $stmt->bindParam(":enquete", $evento->getEnquete(), PDO::PARAM_INT);
    $stmt->bindParam(":observacao", $evento->getObservacao(), PDO::PARAM_STR);
    $stmt->bindParam(":unisede", $evento->getSede(), PDO::PARAM_INT);
    $stmt->bindParam(":ues", $evento->getUe(), PDO::PARAM_INT);
    $stmt->bindParam(":agencia", $evento->getAgencia(), PDO::PARAM_INT);
    $stmt->bindParam(":externos", $evento->getExterno(), PDO::PARAM_INT);
    $stmt->bindParam(":desc_publico", $evento->getDesc_publi(), PDO::PARAM_STR);
    $stmt->bindParam(":pin", $pin, PDO::PARAM_STR);
    
    $result = $stmt->execute();
    if(!$result){
        echo $stmt->errorInfo();
        exit;
    }else{
        $pdo = null;
        $stmt = null;
        header("Location: ./?p=agv&m=s");
        exit;
    }
    

    
}

