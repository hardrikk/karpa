<?php
include 'php/controller/aguarController.php';

$sql = gerarAguarEvento();
?>
<div class="title-pag container-fluid">
    <h2>EVENTOS AGUARDANDO APROVAÇÃO</h2>
</div>
<div class="container">
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
        <strong>Warning!</strong> Better check yourself, you're not looking too good.
    </div>
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
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

