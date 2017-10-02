<?php
if (isset($_REQUEST['id'])) {
    $id = intval($_REQUEST['id']);
    $acao = $_GET['a'];
}
?>
<div class="modal-header">
    <h3 class="modal-title">Confirmação do PIN</h3>
</div>
<?php if ($acao == 'ex') : ?>
    <div class="alert alert-warning text-center" role="alert">
        <strong>Cuidado!</strong> Deseja realmente excluír a solicitação?
    </div>
<?php endif; ?>
<div class="modal-body">
    <div class="container-fluid">
        <form id="confirmarPin" action="?p=pmm<?php echo "&id=" . $id . "&a=" . $acao ?>" method="POST" data-toggle="validator">
            <div class="form-group row">
                <label for="pin" class="col-sm-3 col-form-label lable-agendar">PIN:</label>
                <div class="col-sm-6">
                    <input type="text" style="text-transform: uppercase" id="pin" name="pin" class="form-control" maxlength="6" placeholder="Digite o PIN de confirmação" required />
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12" align="center">
                    
                    <input class="btn btn-primary" type="submit" value="Enviar" id="enviar" name="enviar">
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
</div>

