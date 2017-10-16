<?php
$ref = ref();
if ($ref == 'p=agv') {
    extract($_GET);
    $form = new form();
    $form->formEditar($id);
} else {
    header("Location: ./?p=404");
    exit;
}
?>
<div class="container">
    <form id="agendarForm" action="?p=em&id=<?php echo $id ?>" method="POST" onsubmit="return validar();" data-toggle="validator">
        <fieldset class="form-group">
            <legend>EVENTO</legend>
            <div class="form-group row">
                <label for="titulo" class="col-sm-2 col-form-label lable-agendar">* Titulo:</label>
                <div class="col-sm-8">
                    <?php echo $form->titulo; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group row">
                <label for="uorg" class="col-sm-2 col-form-label lable-agendar">* UORG:</label>
                <div class="col-sm-3">
                    <?php echo $form->uorg; ?>
                    <div class="help-block with-errors"></div>
                </div>
                <label for="local" class="col-sm-2 col-form-label lable-agendar">* Local:</label>
                <div class="col-sm-3">
                    <?php echo $form->locais2; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label lable-agendar">* Data de Início:</label>
                <div class="col-sm-3">
                    <div id="sandbox-container" class="input-group">
                        <?php echo $form->dtinicio; ?>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </div>
                    </div>
                    <div class="help-block with-errors"></div>
                </div>
                <label class="col-sm-2 col-form-label lable-agendar">* Data de Término:</label>
                <div class="col-sm-3">
                    <div id="sandbox-container" class="input-group">
                        <?php echo $form->dtfinal; ?>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </div>
                    </div>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label lable-agendar">* Hora de Início:</label>
                <div class="col-sm-3">
                    <?php echo $form->hrinicio; ?>
                    <div class="help-block with-errors hrierros"></div>
                </div>
                <label class="col-sm-2 col-form-label lable-agendar">* Hora de Término:</label>
                <div class="col-sm-3">
                    <?php echo $form->hrfinal; ?>
                    <div class="help-block with-errors hrferros"></div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label lable-agendar">* Descrição do Evento:</label>
                <div class="col-sm-8">
                    <?php echo $form->desc_evento; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <legend>RESPONSÁVEL</legend>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label lable-agendar">* Nome:</label>
                <div class="col-sm-8">
                    <?php echo $form->responsavel; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label lable-agendar">* E-mail:</label>
                <div class="col-sm-8">
                    <?php echo $form->email; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label lable-agendar">Telefone:</label>
                <div class="col-sm-2">
                    <?php echo $form->telefone; ?>
                    <div class="help-block with-errors"></div>
                </div>
                <label class="col-sm-1 col-form-label lable-agendar">Ramal:</label>
                <div class="col-sm-2">
                    <?php echo $form->ramal; ?>
                    <div class="help-block with-errors"></div>
                </div>
                <label class="col-sm-1 col-form-label lable-agendar">Celular:</label>
                <div class="col-sm-2">
                    <?php echo $form->celular; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <legend>OUTROS</legend>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label lable-agendar">Ferramentas:</label>
                <div class="col-sm-2">
                    <label class="custom-control custom-checkbox">
                        <?php echo $form->chat; ?>
                        <span class="custom-control-description">Chat</span>
                    </label>
                </div>
                <div class="col-sm-2">
                    <label class="custom-control custom-checkbox">
                        <?php echo $form->slide; ?>
                        <span class="custom-control-description">Slide</span>
                    </label>
                </div>
                <div class="col-sm-2">
                    <label class="custom-control custom-checkbox">
                        <?php echo $form->enquete; ?>
                        <span class="custom-control-description">Enquete</span>
                    </label>
                </div>
                <div class="col-sm-2">
                    <label class="custom-control custom-checkbox">
                        <?php echo $form->pergunta; ?>
                        <span class="custom-control-description">Perguntas</span>
                    </label>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label lable-agendar">Observação:</label>
                <div class="col-sm-8">
                    <?php echo $form->observacao; ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label lable-agendar">* Público Alvo:</label>
                <div class="col-sm-2">
                    <label class="custom-control custom-checkbox">
                        <?php echo $form->sede; ?>
                        <span class="custom-control-description">Unidades-SEDE</span>
                    </label>
                </div>
                <div class="col-sm-2">
                    <label class="custom-control custom-checkbox">
                        <?php echo $form->ues; ?>
                        <span class="custom-control-description">UEs</span>
                    </label>
                </div>
                <div class="col-sm-2">
                    <label class="custom-control custom-checkbox">
                        <?php echo $form->agencia; ?>
                        <span class="custom-control-description">Agências</span>
                    </label>
                </div>
                <div class="col-sm-2">
                    <label class="custom-control custom-checkbox">
                        <?php echo $form->externo; ?>
                        <span class="custom-control-description">Usuários Externos</span>
                    </label>
                </div>
                <div class="help-block with-errors checkerros"></div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label lable-agendar">Descrição do público:</label>
                <div class="col-sm-8">
                    <?php echo $form->desc_publico; ?>
                </div>
            </div>
        </fieldset>
        <div class="form-group row">
            <div class="col-sm-12" align="center">
                    <?php
                    form::btnVoltarAguar();
                    ?>
                    <?php
                    form::btnSalvar();
                    ?>
            </div>
        </div>
    </form>
</div>
