<?php
if (isset($_REQUEST['id'])) {
    include '../util/conexao.php';
    include '../util/querys.php';
    include '../util/funcao.php';
    include '../class/evento.php';
    $pdo = conectar();

    $ide = intval($_REQUEST['id']);
    $query = selectModalAssistir();
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(1, $ide);
    $stmt->execute();

    $lista = "";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $data = convertData($data);
        $hr_inicio = convertHora($hr_inicio);
        $hr_final = convertHora($hr_final);
        $lista .= "
            <tr>
                <th>$data ($hr_inicio)<br>$palestrante ($orgao)</th>
                <th>$titulo</th>
                <td>$descricao</td>
                <td style=\"text-align: center;\">
                    <button type=\"button\" id=\"caralho\" onclick=\"mudarsrc(this)\" value=\"/virtual_videos/$ide/$nome\" class=\"btn btn-primary\">Assistir</button>
                </td>
            </tr>";
    }
    
    $evento = evento::gerarEventoID($ide);
    
}
?>
<div class="modal-header">
    <h3 class="modal-title"><?php echo $evento["titulo"]; ?></h3>
</div>
<div class="modal-body" onload="datatt()">
    <div class="container-fluid text-center">
        <p><?php echo $evento["desc_evento"]; ?></p>
    </div>
        <div class="datatables">
            <div class="table-responsive">
                <table id="tablepag2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>DATA</th>
                            <th>TÍTULO</th>
                            <th>DESCRIÇÃO</th>
                            <th class="text-center">AÇÃO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo $lista; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script language="javacript">
            $('#tablepag2').DataTable({
        order: false,
        lengthChange: false, 
        pageLength: 3, 
        searching: false,
        "language": {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        }
    });
        </script>
        <div class="container-fluid">
            <div id="divvideo" class="embed-responsive embed-responsive-16by9" style="display:none;">
                <iframe id="video" class="embed-responsive-item" src="" allowfullscreen>Sem Vídeo</iframe>
            </div>
        </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
</div>
</div>



