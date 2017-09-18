<?php
function selectProxView(){
    return "SELECT e.*,  l.local "
            . "FROM tvibge_eventos e "
            . "JOIN tvibge_locais l ON e.fklocal = l.id "
            . "WHERE aprovado=1 and status=0 and ativo=1 and (dt_final > CURRENT_DATE) "
            . "ORDER BY dt_inicio, hora_inicio";
}

function selectAnteView(){
    return "SELECT DISTINCT e.id, e.dt_inicio, e.hora_inicio, e.titulo, e.contato 
FROM tvibge_eventos e 
JOIN tvibge_sessao se ON e.id = se.fkevento
JOIN tvibge_video s ON se.id = s.fksessao 
WHERE e.aprovado=1 and e.status=0 and e.ativo=1 and (e.dt_final < CURRENT_DATE) 
ORDER BY dt_inicio, hora_inicio DESC";
}

function selectAguarView(){
    return "SELECT id, dt_inicio, hora_inicio, titulo, contato "
            . "FROM tvibge_eventos "
            . "WHERE aprovado=0 and status=0 and ativo=1 and (dt_inicio >= CURRENT_DATE) "
            . "ORDER BY dt_inicio, hora_inicio";
}
function selectUorg(){
    return "SELECT * FROM tvibge_uorg";
}

function selectLocais(){
    return "SELECT * FROM tvibge_locais";
}