<?php
$ref = ref();
if ($ref == 'p=agv') {
    extract($_GET);
    $form = new form();
    $form->formAvaliar($id);
} else {
    header("Location: ./?p=404");
    exit;
}
?>
<div class="container">
    <form id="avaliarForm" action="?p=avm&id=<?php echo $id; ?>" method="POST" onsubmit="return validarAvaliar();" data-toggle="validator">
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
                    <?php echo $form->uorg2; ?>
                    <div class="help-block with-errors"></div>
                </div>
                <label for="local" class="col-sm-2 col-form-label lable-agendar">* Local:</label>
                <div class="col-sm-3">
                    <?php echo $form->locais3; ?>
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
                    <?php echo $form->desc_evento2; ?>
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
                    <?php echo $form->observacao2; ?>
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
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label lable-agendar">Descrição do público:</label>
                <div class="col-sm-8">
                    <?php echo $form->desc_publico2; ?>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <legend>SERVIÇOS</legend>
            <div class="container servicoerror" align="center" style="display:none;">
                <div style="display:inline-block;" class="alert alert-danger" role="alert">       
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label lable-agendar">* Tipo:</label>
                <div class="col-sm-2">
                    <label class="custom-control custom-checkbox">
                        <?php echo $form->tvibge; ?>
                        <span class="custom-control-description">TVIBGE</span>
                    </label>
                </div>
                <div class="col-sm-2">
                    <label class="custom-control custom-checkbox">
                        <?php echo $form->webcast; ?>
                        <span class="custom-control-description">WEBCAST</span>
                    </label>
                </div>
                <div class="col-sm-4 help-block with-errors"></div>
            </div>
            <div class="form-group row">
                <label for="webexterna" class="col-sm-2 col-form-label lable-agendar">* Web Externa:</label>
                <div class="col-sm-8">
                    <?php echo $form->webexterna; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </fieldset>
        <div class="form-group row">
            <div class="col-sm-12" align="center">
                <?php
                form::btnReprovar($id);
                ?>
                <?php
                form::btnAprovar();
                ?>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12" align="center">
                <?php
                form::btnVoltar();
                ?>
            </div>
        </div>
    </form>
</div>
<div id="repromodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">

        </div>
    </div>
</div>

