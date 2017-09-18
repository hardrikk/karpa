<?php
include 'php/controller/anteController.php';

$sql = gerarAnteEvento();
?>
<div class="title-pag container-fluid">
    <h2>EVENTOS ANTERIORES</h2>
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
                <?php while ($assoc = mysqli_fetch_assoc($sql)) { ?>
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

