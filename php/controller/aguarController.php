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
                <td style=\"text-align: center;\"> "; 
        $listaAguarEvento .= !estarLogado() ? "
                    <button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#pinmodal\" data-id=\"$id\" id=\"pinModalEdit\">
                        EDITAR
                    </button>
                    <button type=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#pinmodal\" data-id=\"$id\" id=\"pinModalExc\">
                        EXCLUÍR
                    </button>
                </td>
            </tr>" : "
                    <a role=\"button\" class=\"btn btn-primary btn-sm\" href=\"?p=avv&id=$id\">
                        AVALIAR
                    </a>
                    <a role=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#pinmodal\" data-id=\"$id\" id=\"pinModalExcA\">
                        EXCLUÍR
                    </a>
                </td>
            </tr>";
    }

    $pdo = null;

    return $listaAguarEvento;
}
