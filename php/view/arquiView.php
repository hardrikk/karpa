<?php
verificarAcesso();
include 'php/controller/arquiController.php';

$listaArquiEvento = gerarArquiEvento();

$mensagem = isset($_GET['m']) ? $_GET['m'] : '';
$mensagem = gerarMensagem($mensagem);
?>
<div class="title-pag container-fluid">
    <h2>EVENTOS ARQUIVADOS</h2>
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
                <?php echo $listaArquiEvento; ?>
            </tbody>

        </table>
    </div>
</div>


