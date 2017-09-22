<?php
include 'php/controller/aguarController.php';

$listaAguarEvento = gerarAguarEvento();

$mensagem = isset($_GET['m']) ? $_GET['m'] : '';
$mensagem = gerarAguarMensagem($mensagem, $_SERVER);
?>
<div class="title-pag container-fluid">
    <h2>EVENTOS AGUARDANDO APROVAÇÃO</h2>
</div>
<?php echo $mensagem; ?>
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
                <?php echo $listaAguarEvento; ?>
            </tbody>
        </table>
    </div>
</div>
<div id="pinmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">

        </div>
    </div>
</div>

