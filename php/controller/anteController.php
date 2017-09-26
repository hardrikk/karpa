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
                <td style=\"text-align: center;\">
                    <button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#assismodal\" data-id=\"$id\" id=\"getAssistir\">
                        ASSISTIR
                    </button>
                </td>
            </tr>";
    }

    $pdo = null;

    return $listaAnteEvento;
}
