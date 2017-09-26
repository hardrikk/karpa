<?php
include 'php/controller/anteController.php';

$listaAnteEvento = gerarAnteEvento();
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
                    <th class="text-center">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $listaAnteEvento;?>
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

