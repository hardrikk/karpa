<?php
include 'php/controller/proxController.php';

$listaProxEvento = gerarProxEvento();

$mensagem = isset($_GET['m']) ? $_GET['m'] : '';
$mensagem = gerarMensagem($mensagem);
?>
<div class="title-pag container-fluid">
    <h2>EVENTOS PRÓXIMOS</h2>
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
                <?php echo $listaProxEvento; ?>
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
<a href="/virtual_videos/1/1_4.mp4" class="html5lightbox">Teste</a>
