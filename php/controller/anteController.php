<?php
function gerarAnteEvento() {
    $con = conectar();

    $query = selectAnteView();

    $sql = mysqli_query($con, $query);
    
    mysqli_close($con);
    
    return $sql;
}
