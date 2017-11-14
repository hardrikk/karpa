<?php
$ref = ref();
if ($ref == 'p=sv') {
    extract($_GET);
    $form = new form();
    $form->formAgendarSessao($id);
} else {
    header("Location: ./?p=404");
    exit;
}
?>
<div class="container">
    <form method="POST" id="sessaoForm" action="?p=sm&id=<?php echo $id; ?>" data-toggle="validator" enctype="multipart/form-data">
        <fieldset class="form-group">
            <legend class="text-center">NOVA SESSÃO</legend>
            <div class="form-group row">
                <label for="titulo" class="col-sm-3 col-form-label lable-agendar">* Titulo:</label>
                <div class="col-sm-7">
                    <?php echo $form->tituloSessao; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group row">
                <label for="palestrante" class="col-sm-3 col-form-label lable-agendar">* Palestrante:</label>
                <div class="col-sm-7">
                    <?php echo $form->palestrante; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group row">
                <label for="orgao" class="col-sm-3 col-form-label lable-agendar">* Orgão:</label>
                <div class="col-sm-7">
                    <?php echo $form->orgao; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group row">
                <label for="desc_sessao" class="col-sm-3 col-form-label lable-agendar">Descrição:</label>
                <div class="col-sm-7">
                    <?php echo $form->desc_sessao; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group row">
                <label for="data" class="col-sm-3 col-form-label lable-agendar">* Data:</label>
                <div class="col-sm-3">
                    <?php echo $form->data; ?>
                    <div class="help-block with-errors"></div>
                </div>
                <label for="hrinicio" class="col-sm-2 col-form-label lable-agendar">* Hora de Início:</label>
                <div class="col-sm-2">
                    <?php echo $form->hrinicioSessao; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group row">
                <label for="hrfinal" class="col-sm-6 col-form-label lable-agendar"></label>
                <label for="hrfinal" class="col-sm-2 col-form-label lable-agendar">* Hora de Término:</label>
                <div class="col-sm-2">
                    <?php echo $form->hrfinalSessao; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group row">
                <label for="observacao" class="col-sm-3 col-form-label lable-agendar">Observacao:</label>
                <div class="col-sm-7">
                    <?php echo $form->observacaoSessao; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group row">
                <label for="video" class="col-sm-3 col-form-label lable-agendar">Vídeo:</label>
                <div class="col-sm-7">
                    <input type="file" name="video" id="video" placeholder="Vídeo da sessão" class="form-group" />
                </div>
            </div>
        </fieldset>
        <div class="form-group row">
            <div class="col-sm-12" align="center">
                <?php form::btnVoltar(); ?> <?php form::btnEnviar(); ?>
            </div>
        </div>
    </form>
</div>

