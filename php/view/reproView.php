<?php
verificarAcesso();
include 'php/controller/reproController.php';

$listaReproEvento = gerarReproEvento();
?>
<div class="title-pag container-fluid">
    <h2>EVENTOS REPROVADOS</h2>
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
                <?php echo $listaReproEvento; ?>
            </tbody>

        </table>
    </div>
</div>




