<?php
if (isset($_REQUEST['id'])) {
    include '../util/conexao.php';
    include '../util/querys.php';
    include '../class/evento.php';

    $pdo = conectar();

    $id = intval($_REQUEST['id']);
    $evento = evento::gerarEventoID($id);
    extract($evento);
}
?>
<div class="modal-header">
    <h3 class="modal-title">SESSÃO</h3>
</div>
<div class="modal-body">
    <form id="sessaoForm" data-toggle="validator">
        <fieldset class="form-group">
            <legend>SESSÃO</legend>
            <label for="titulo" class="col-sm-2 col-form-label lable-agendar">* Titulo:</label>
                <div class="col-sm-8">
                    <?php echo ''; ?>
                    <div class="help-block with-errors"></div>
                </div>
        </fieldset>
    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
</div>

