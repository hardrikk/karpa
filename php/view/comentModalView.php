<?php
if (isset($_REQUEST['id'])) {
    $id = intval($_REQUEST['id']);
}
?>
<div class="modal-header">
    <h3 class="modal-title">COMENTÁRIO DE REPROVAÇÃO</h3>
    <h6 class="modal-title">(opcional)</h6>
</div>
<div class="modal-body">
    <div class="container-fluid">
        <form action="?p=avm&id=<?php echo $id; ?>" method="POST">
            <div class="form-group row">
                <label for="comentario" class="col-sm-3 col-form-label lable-agendar">Comentário:</label>
                <div class="col-sm-7">
                    <textarea name="comentario" id="comentario" class="form-control" placeholder="Motivo da reprovação"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12" align="center">
                    <input class="btn btn-primary" type="submit" value="Confirmar" id="reprovar" name="reprovar">
                </div>
            </div>
        </form>
    </div>
</div>


