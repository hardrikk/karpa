<?php
function gerarAguarEvento() {
    $pdo = conectar();

    $query = selectAguarView();

    $sql = $pdo->query($query)->fetchAll();
    
    $listaAguarEvento = "";
    foreach ($sql as $assoc) {
        extract($assoc);
        $dt_inicio = convertData($dt_inicio);
        $hora_inicio = convertHora($hora_inicio);
        $listaAguarEvento .= "
            <tr>
                <th>$dt_inicio $hora_inicio</th>
                <td>$titulo</td>
                <td>$contato</td>
                <td style=\"text-align: center;\">
                    <a href=\"#\" class=\"btn btn-primary btn-sm\" role=\"button\">
                        EDITAR
                    </a>
                    <a href=\"#\" class=\"btn btn-danger btn-sm\" role=\"button\">
                        EXCLUÍR
                    </a>
                </td>
            </tr>";
    }

    $pdo = null;

    return $listaAguarEvento;
}

