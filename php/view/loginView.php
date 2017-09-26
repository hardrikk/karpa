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
                <label class="control-label col-sm-offset-4 col-sm-1" for="email">* Usuario:</label>
                <div class="col-sm-2">
                    <?php echo $form->usuario; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-offset-4 col-sm-1" for="pwd">* Senha:</label>
                <div class="col-sm-2"> 
                    <?php echo $form->senha; ?>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group"> 
                <?php form::btnEnviar(); ?>
            </div>
        </fieldset>
    </form>
</div>

