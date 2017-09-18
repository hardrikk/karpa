<?php
include 'php/controller/proxController.php';

$sql = gerarProxEvento();
?>
<div class="title-pag container-fluid">
    <h2>EVENTOS PRÓXIMOS</h2>
</div>
<div class="datatables">
    <div class="table-responsive">
        <table id="tablepag" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>DATA</th>
                    <th>TÍTULO</th>
                    <th>RESPONSÁVEL</th>
                    <th style="text-align: center;">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sql as $assoc) { ?>
                    <tr>
                        <th><?php echo $assoc['dt_inicio'] . ' ' . $assoc['hora_inicio'] ?></th>
                        <td><?php echo $assoc['titulo'] ?></td>
                        <td><?php echo $assoc['contato'] ?></td>
                        <td style="text-align: center;">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg<?php echo $assoc['id'] ?>">
                                INFORMAÇÕES
                            </button>
                        </td>
                    </tr>
                <div class="modal fade bd-example-modal-lg<?php echo $assoc['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title"><?php echo $assoc['titulo'] ?></h3>
                            </div>
                            <div class="modal-body">
                                <?php echo $assoc['descricao_evento'] ?>
                                TVIBGE:<?php echo $assoc['tvibge'] == 1 ? "Sim" : 'Não'; ?>
                                Webcast: <?php echo $assoc['webcast'] == 1 ? $assoc['web_externa'] : 'Não'; ?>
                                Local:<?php echo $assoc['local']; ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </tbody>

        </table>
    </div>
</div>
