<?php
if (isset($_REQUEST['id'])) {
    include '../util/conexao.php';
    include '../util/querys.php';
    $pdo = conectar();

    $id = intval($_REQUEST['id']);
    $query = selectProxModalView();
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute() or die();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    extract($row);
}
?>
<div class="modal-header">
    <h3 class="modal-title"><?php echo $titulo;?></h3>
</div>
<div class="modal-body">
    <div class="container-fluid desc-modal">
        <?php echo $descricao_evento; ?>
    </div>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 lable-agendar">TVIBGE :</div>
            <div class="col-sm-9"><?php echo $tvibge == 1 ? "Sim" : "Não";?></div>
        </div>
        <div class="row">
            <div class="col-sm-3 lable-agendar">WEBCAST :</div>
            <div class="col-sm-9"><?php echo $webcast == 1 ? $web_externa : "Não";?></div>
        </div>
        <div class="row">
            <div class="col-sm-3 lable-agendar">LOCAL :</div>
            <div class="col-sm-9"><?php echo $local;?></div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
</div>

