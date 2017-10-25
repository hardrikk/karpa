<?php
function gerarListaSessaoEvento($id){
    $pdo = conectar();

    $query = selectSessaoEvento();
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(1, $id);
    $stmt->execute();
    $sql = $stmt->fetchAll();

    $listaSessaoEvento = "";
    foreach ($sql as $assoc) {
        extract($assoc);
        $data = convertData($data);
        $hr_inicio = convertHora($hr_inicio);
        $hr_final = convertHora($hr_final);
        $listaSessaoEvento .= "
            <tr>
                <th>$data ($hr_inicio ~ $hr_final)</th>
                <td>$titulo</td>
                <td>$palestrante</td>
                <td style=\"text-align: center;\">";
        $listaSessaoEvento .= "
                <button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#\" data-id=\"$id\" id=\"\">
                    EDITAR
                </button>
                <button type=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#\" data-id=\"$id\" id=\"\">
                    EXCLUIR
                </button>
                </td>
            </tr>";
    }

    $pdo = null;

    return $listaSessaoEvento;
}
?>

