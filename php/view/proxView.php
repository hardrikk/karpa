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
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#proxmodal" data-id="<?php echo $assoc['id'] ?>" id="getEvento">
                                INFORMAÇÕES
                            </button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
</div>
<div id="proxmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">

        </div>
    </div>
</div>
