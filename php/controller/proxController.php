<?php

function gerarProxEvento() {
    $pdo = conectar();

    $query = selectProxView();

    $sql = $pdo->query($query)->fetchAll();

    $listaProxEvento = "";
    foreach ($sql as $assoc) {
        extract($assoc);
        $dt_inicio = convertData($dt_inicio);
        $hr_inicio = convertHora($hr_inicio);
        $listaProxEvento .= "
            <tr>
                <th>$dt_inicio $hr_inicio</th>
                <td>$titulo</td>
                <td>$responsavel</td>
                <td style=\"text-align: center;\">";
        $listaProxEvento .= !estarLogado() ? "
                <button type=\"button\" class=\"btn btn-info btn-sm\" data-toggle=\"modal\" data-target=\"#proxmodal\" data-id=\"$id\" id=\"getEvento\">
                    <span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span> INFORMAÇÕES
                </button>
                </td>
            </tr>" :
                "<a role=\"button\" class=\"btn btn-primary btn-sm\" href=\"?p=eav&id=$id\">
                    EDITAR
                </a>
                <a role=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#proxmodal\" data-id=\"$id\" id=\"pinModalExcA\">
                    EXCLUÍR
                </a>
                </td>
            </tr>";
    }

    $pdo = null;

    return $listaProxEvento;
}
