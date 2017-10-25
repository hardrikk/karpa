<?php

function gerarArquiEvento() {
    $pdo = conectar();

    $query = selectArquiView();

    $sql = $pdo->query($query)->fetchAll();

    $listaArquiEvento = "";
    foreach ($sql as $assoc) {
        extract($assoc);
        $dt_inicio = convertData($dt_inicio);
        $hr_inicio = convertHora($hr_inicio);
        $listaArquiEvento .= "
            <tr>
                <th>$dt_inicio $hr_inicio</th>
                <td>$titulo</td>
                <td>$responsavel</td>
                <td style=\"text-align: center;\">
                    <button type=\"button\" class=\"btn btn-info btn-sm\" data-toggle=\"modal\" data-target=\"#proxmodal\" data-id=\"$id\" id=\"getEvento\">
                        VISUALIZAR
                    </button>
                    <button type=\"button\" class=\"btn btn-warning btn-sm\" data-toggle=\"modal\" data-target=\"#proxmodal\" data-id=\"$id\" id=\"getEvento\">
                        DESARQUIVAR
                    </button>
                </td>
            </tr>";
    }

    $pdo = null;

    return $listaArquiEvento;
}
?>

