<?php

function gerarProxEvento() {
    $pdo = conectar();

    $query = selectProxView();

    $sql = $pdo->query($query)->fetchAll();

    $listaProxEvento = "";
    foreach ($sql as $assoc) {
        extract($assoc);
        $dt_inicio = convertData($dt_inicio);
        $hora_inicio = convertHora($hora_inicio);
        $listaProxEvento .= "
            <tr>
                <th>$dt_inicio $hora_inicio</th>
                <td>$titulo</td>
                <td>$contato</td>
                <td style=\"text-align: center;\">
                    <button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#proxmodal\" data-id=\"$id\" id=\"getEvento\">
                        <span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span> INFORMAÇÕES
                    </button>
                </td>
            </tr>";
    }

    $pdo = null;

    return $listaProxEvento;
}
