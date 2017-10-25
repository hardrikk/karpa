<?php
function gerarAnteEvento() {
    $pdo = conectar();

    $query = selectAnteView();

    $sql = $pdo->query($query)->fetchAll();

    $listaAnteEvento = "";
    foreach ($sql as $assoc) {
        extract($assoc);
        $dt_inicio = convertData($dt_inicio);
        $hr_inicio = convertHora($hr_inicio);
        $listaAnteEvento .= "
            <tr>
                <th>$dt_inicio $hr_inicio</th>
                <td>$titulo</td>
                <td>$responsavel</td>
                <td style=\"text-align: center;\">";
        if(eventoComVideo($id)){
            $listaAnteEvento .= "
                    <button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#assismodal\" data-id=\"$id\" id=\"getAssistir\">
                        ASSISTIR
                    </button>
                ";
        }elseif(!estarLogado()){
            $listaAnteEvento .= "Vídeo Indisponível";
        }
        if(estarLogado()){
            $listaAnteEvento .= "
                    <a role=\"button\" class=\"btn btn-primary btn-sm\" href=\"?p=sv&id=$id\">
                        SESSÃO
                    </a>
                    <button type=\"button\" name=\"$id\" class=\"btn btn-warning btn-sm arquivarButton\" data-toggle=\"modal\" data-target=\"#arquivarModal\">
                        ARQUIVAR
                    </button>
                    ";
        }
        
        $listaAnteEvento .= "
                </td>
            </tr>";
    }

    $pdo = null;

    return $listaAnteEvento;
}

function eventoComVideo($id){
    $pdo = conectar();
    $query = selectEventoVideo();
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(1, $id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if($row == ''){
        return false;
    }else{
        return true;
    }
}
