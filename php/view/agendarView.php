<?php 
    include "php/controller/formController.php";
    include "php/class/form.php";
    $form = new form();
//    $uorg = gerarUorg();
//    $locais = gerarLocal();
?>
<div class="container">
    <form id="agendarForm" action="?p=am" method="POST" onsubmit="return validar();" data-toggle="validator">
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
                    <?php echo $form->locais; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label lable-agendar">* Data de Início:</label>
                <div class="col-sm-3">
                    <div id="sandbox-container" class="input-group">
                        <input name="dtinicio" id="dtinicio" type="text" class="form-control" placeholder="dd/mm/aaaa"  required>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </div>
                    </div>
                        <div class="help-block with-errors"></div>
                </div>
                <label class="col-sm-2 col-form-label lable-agendar">* Data de Término:</label>
                <div class="col-sm-3">
                    <div id="sandbox-container" class="input-group">
                        <input name="dtfinal" id="dtfinal" type="text" class="form-control" placeholder="dd/mm/aaaa"  required>
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
                    <input name="hrinicio" id="hrinicio" data-format="hh:mm" type="text" class="form-control modalhr" placeholder="hh:mm"  required>
                    <div class="help-block with-errors hrierros"></div>
                </div>
                <label class="col-sm-2 col-form-label lable-agendar">* Hora de Término:</label>
                <div class="col-sm-3">
                    <input name="hrfinal" id="hrfinal" data-format="hh:mm" type="text" class="form-control modalhr" placeholder="hh:mm" title="Duração mínima de 2 horas" required>
                    <div class="help-block with-errors hrferros"></div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label lable-agendar">* Descrição do Evento:</label>
                <div class="col-sm-8">
                    <textarea name="desc_evento" id="desc_evento" class="form-control col-sm-12" placeholder="Descrição do evento" maxlength="800" required></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <legend>RESPONSÁVEL</legend>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label lable-agendar">* Nome:</label>
                <div class="col-sm-8">
                    <input type="text" name="responsavel" id="responsavel" class="form-control" placeholder="Nome do responsável" pattern="^[_A-z]{1,}$" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label lable-agendar">* E-mail:</label>
                <div class="col-sm-8">
                    <input type="email" name="email" id="email" class="form-control" placeholder="E-mail do responsável" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label lable-agendar">Telefone:</label>
                <div class="col-sm-2">
                    <input type="text" name="telefone" id="telefone" class="form-control" pattern="^[ 0-9()-]{1,}$" placeholder="Telefone de contato">
                    <div class="help-block with-errors"></div>
                </div>
                <label class="col-sm-1 col-form-label lable-agendar">Ramal:</label>
                <div class="col-sm-2">
                    <input type="text" name="ramal" id="ramal" class="form-control" pattern="^[0-9]{1,}$" maxlength="4" placeholder="Ramal de contato">
                    <div class="help-block with-errors"></div>
                </div>
                <label class="col-sm-1 col-form-label lable-agendar">Celular:</label>
                <div class="col-sm-2">
                    <input type="text" name="celular" id="celular" class="form-control" pattern="^[ 0-9()-]{1,}$" placeholder="Celular de contato">
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
                        <input type="checkbox" name="chat" id="chat" class="custom-control-input">
                        <span class="custom-control-description">Chat</span>
                    </label>
                </div>
                <div class="col-sm-2">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" name="slide" id="slide" class="custom-control-input">
                        <span class="custom-control-description">Slide</span>
                    </label>
                </div>
                <div class="col-sm-2">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" name="enquete" id="enquete" class="custom-control-input">
                        <span class="custom-control-description">Enquete</span>
                    </label>
                </div>
                <div class="col-sm-2">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" name="perguntas" id="perguntas" class="custom-control-input">
                        <span class="custom-control-description">Perguntas</span>
                    </label>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label lable-agendar">Observação:</label>
                <div class="col-sm-8">
                    <textarea name="observacao" id="observacao" class="form-control col-sm-12" placeholder="Observação sobre as ferramentas"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label lable-agendar">* Público Alvo:</label>
                <div class="col-sm-2">
                    <label class="custom-control custom-checkbox">
                        <input name="sede" id="sede" type="checkbox" class="custom-control-input">
                        <span class="custom-control-description">Unidades-SEDE</span>
                    </label>
                </div>
                <div class="col-sm-2">
                    <label class="custom-control custom-checkbox">
                        <input name="ue" id="ue" type="checkbox" class="custom-control-input">
                        <span class="custom-control-description">UEs</span>
                    </label>
                </div>
                <div class="col-sm-2">
                    <label class="custom-control custom-checkbox">
                        <input name="agencia" id="agencia" type="checkbox" class="custom-control-input">
                        <span class="custom-control-description">Agências</span>
                    </label>
                </div>
                <div class="col-sm-2">
                    <label class="custom-control custom-checkbox">
                        <input name="externo" id="externo" type="checkbox" class="custom-control-input">
                        <span class="custom-control-description">Usuários Externos</span>
                    </label>
                </div>
                <div class="help-block with-errors checkerros"></div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label lable-agendar">Descrição do público:</label>
                <div class="col-sm-8">
                    <textarea name="desc_publico" id="desc_publico" class="form-control col-sm-12" placeholder="Descrição do público"></textarea>
                </div>
            </div>
        </fieldset>
        <div class="form-group row">
            <div class="col-sm-12">
                <input class="btn btn-primary center-block" type="submit" value="Enviar">
            </div>
        </div>
    </form>
</div>