<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header("Location: ./?p=404");
    exit;
}else{
    $pdo = conectar();
    $obpost = (object) $_POST;
    extract($_GET);
    $sessao = new sessao();
    $sessao->validarSessao($obpost, $id);
    
    $query = insertSessao();
    $stmt = $pdo->prepare($query);
    
    $i = 1;
    $stmt->bindParam($i++, $sessao->getFkevento());
    $stmt->bindParam($i++, $sessao->getTitulo());
    $stmt->bindParam($i++, $sessao->getDescricao());
    $stmt->bindParam($i++, $sessao->getData());
    $stmt->bindParam($i++, $sessao->getHrInicio());
    $stmt->bindParam($i++, $sessao->getHrFinal());
    $stmt->bindParam($i++, $sessao->getPalestrante());
    $stmt->bindParam($i++, $sessao->getOrgao());
    $stmt->bindParam($i++, $sessao->getObservacao());
    
    $stmt->execute();
    $idSessao = $pdo->lastInsertId();

    if (isset($_FILES['video']) && $_FILES['video']['name'] != '') {
        $name = $_FILES['video']['name'];
        $extension = explode('.', $name);
        $extension = end($extension);
        $type = $_FILES['video']['type'];
        $size = $_FILES['video']['size'] / 1024 / 1024;
        $tmp = $_FILES['video']['tmp_name'];
            if ((strtolower($type) != "video/mpg") && (strtolower($type) != "video/wma") && (strtolower($type) != "video/mov") && (strtolower($type) != "video/flv") && (strtolower($type) != "video/mp4") && (strtolower($type) != "video/avi") && (strtolower($type) != "video/qt") && (strtolower($type) != "video/wmv")) {
                header("Location: ./?p=sv&m=v&id=$id");
                exit;
            } else {
                $diretorio = diretorio . '/' . $id;

                if (!is_dir($diretorio)) {
                    mkdir($diretorio);
                }
                
                $nome = $id . "_" . $idSessao . $extension;
                $caminho = $diretorio . "/" . $nome;
                
                if(move_uploaded_file($tmp, $caminho)){
                    $query = insertVideo();
                    $stmt = $pdo->prepare($query);
                    
                    $i = 1;
                    $stmt->bindParam($i++, $nome);
                    $stmt->bindParam($i++, $diretorio);
                    
                    $result = $stmt->execute();
                    
                    if($result){
                        $idVideo = $pdo->lastInsertId();

                        $query = updateFkVideo();
                        $stmt = $pdo->prepare($query);
                        $i = 1;
                        $stmt->bindParam($i++, $idVideo);                      
                        $stmt->bindParam($i++, $idSessao);
                        
                        $stmt->execute();
                    }
                }
            }
    }  
    header("Location: ./?p=sv&m=ss&id=$id");
    exit;
}
?>