<?php
include 'php/controller/anteController.php';

$listaAnteEvento = gerarAnteEvento();

$mensagem = isset($_GET['m']) ? $_GET['m'] : '';
$mensagem = gerarMensagem($mensagem);
?>
<div class="title-pag container-fluid">
    <h2>EVENTOS ANTERIORES</h2>
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
                    <th class="text-center">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $listaAnteEvento; ?>
            </tbody>

        </table>
    </div>
</div>
<div id="arquivarModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">CONFIRMAÇÃO</h3>
            </div>
            <div class="alert alert-warning text-center" role="alert">
                <strong>Cuidado!</strong> Deseja arquivar o evento?
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form id="arquivarForm" action="?p=aqm&id=" method="POST">
                        <div class="form-group row">
                            <div class="col-sm-12" align="center">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <input class="btn btn-primary" type="submit" value="Confirmar" id="confirmar" name="confirmar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

