<?php
if (isset($_REQUEST['id'])) {
    include '../util/conexao.php';
    include '../util/querys.php';
    include '../util/funcao.php';
    include '../class/evento.php';
    include '../class/form.php';
    
    $id = intval($_REQUEST['id']);
    $form = new form();
    $form->formAgendarSessao($id);
}
?>
<div class="modal-header">
    <h3 class="modal-title">SESSÃO</h3>
</div>
<div class="modal-body">
    <form method="POST" id="sessaoForm" action="?p=sm&id=<?php echo $id; ?>" data-toggle="validator">
        <fieldset class="form-group">
            <div class="form-group row">
            <label for="titulo" class="col-sm-3 col-form-label lable-agendar">* Titulo:</label>
                <div class="col-sm-7">
                    <?php  echo $form->tituloSessao; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group row">
            <label for="palestrante" class="col-sm-3 col-form-label lable-agendar">* Palestrante:</label>
                <div class="col-sm-7">
                    <?php  echo $form->palestrante; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group row">
            <label for="orgao" class="col-sm-3 col-form-label lable-agendar">* Orgão:</label>
                <div class="col-sm-7">
                    <?php  echo $form->orgao; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group row">
            <label for="desc_sessao" class="col-sm-3 col-form-label lable-agendar">Descrição:</label>
                <div class="col-sm-7">
                    <?php  echo $form->desc_sessao; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group row">
            <label for="data" class="col-sm-3 col-form-label lable-agendar">* Data:</label>
                <div class="col-sm-3">
                    <?php  echo $form->data; ?>
                    <div class="help-block with-errors"></div>
                </div>
            <label for="hrinicio" class="col-sm-2 col-form-label lable-agendar">* Hora de Início:</label>
                <div class="col-sm-2">
                    <?php  echo $form->hrinicioSessao; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group row">
            <label for="hrfinal" class="col-sm-6 col-form-label lable-agendar"></label>
            <label for="hrfinal" class="col-sm-2 col-form-label lable-agendar">* Hora de Término:</label>
                <div class="col-sm-2">
                    <?php  echo $form->hrfinalSessao; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group row">
            <label for="observacao" class="col-sm-3 col-form-label lable-agendar">Observacao:</label>
                <div class="col-sm-7">
                    <?php  echo $form->observacaoSessao; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group row">
            <label for="video" class="col-sm-3 col-form-label lable-agendar">Vídeo:</label>
                <div class="col-sm-7">
                    <input type="file" name="video" id="video" placeholder="Vídeo da sessão" class="form-group" />
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </fieldset>
        <div class="form-group row">
            <div class="col-sm-12">
                <?php form::btnEnviar(); ?>
            </div>
        </div>
    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
</div>

