<?php
//<a href=\"#\" class=\"btn btn-primary btn-sm\" role=\"button\">
//                        EDITAR
//                    </a>
//                    <a href=\"#\" class=\"btn btn-danger btn-sm\" role=\"button\">
//                        EXCLUÍR
//                    </a>
function gerarAguarEvento() {
    $pdo = conectar();

    $query = selectAguarView();

    $sql = $pdo->query($query)->fetchAll();

    $listaAguarEvento = "";
    foreach ($sql as $assoc) {
        extract($assoc);
        $dt_inicio = convertData($dt_inicio);
        $hr_inicio = convertHora($hr_inicio);
        $listaAguarEvento .= "
            <tr>
                <th>$dt_inicio $hr_inicio</th>
                <td>$titulo</td>
                <td>$responsavel</td>
                <td style=\"text-align: center;\">
                    <button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#pinmodal\" data-id=\"$id\" id=\"pinModalEdit\">
                        EDITAR
                    </button>
                    <button type=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#pinmodal\" data-id=\"$id\" id=\"pinModalExc\">
                        EXCLUÍR
                    </button>
                </td>
            </tr>";
    }

    $pdo = null;

    return $listaAguarEvento;
}

function gerarAguarMensagem($mensagem, $server) {
    $ref = isset($server["HTTP_REFERER"]) ? explode("?", $server["HTTP_REFERER"]) : '';
    $ref = isset($ref[1]) ? $ref[1] : '';
    $ref = explode("&",$ref);
    $ref = $ref[0];

    $men = "";
    if ($ref == 'p=av' || $ref == 'p=agv') {
        if (trim($mensagem)) {
            $men = "<div class=\"container\">
                        <div class=\"alert text-center ";
            switch ($mensagem) {
                case 's':
                    $men .= "alert-success\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span></button>
                                <strong>Sucesso!</strong> Sua solicitação foi feita com sucesso. Para alteração na solicitação, utilize o Pin recebido por e-mail.";
                    break;
                case 'pi':
                    $men .="alert-danger\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span></button>
                                <strong>PIN INVÁLIDO!</strong> Por favor, verifique o PIN digitado.";
            }
            $men .= "</div>
                </div>";
        }
    }
    return $men;
}
