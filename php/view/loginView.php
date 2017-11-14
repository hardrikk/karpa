<?php
include 'php/controller/loginController.php';

$form = new form();
$form->formLogin();

$mensagem = isset($_GET['m']) ? $_GET['m'] : '';
$mensagem = gerarMensagem($mensagem);

?>
<div class="container">
    <form action="?p=lm" method="POST" class="form-horizontal" data-toggle="validator">
        <fieldset class="form-group">
            <legend class="text-center"><h3>LOGIN</h3></legend>
            <?php echo $mensagem; ?>
            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-2">
                <label class="control-label" for="usuario">* Usuario:</label>
                    <?php echo $form->usuario; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-2"> 
                <label class="control-label" for="senha">* Senha:</label>
                    <?php echo $form->senha; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group" align="center"> 
                <?php form::btnEnviar(); ?>
            </div>
        </fieldset>
    </form>
</div>

