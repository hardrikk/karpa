<?php
function selectProxView(){
    return "SELECT e.* "
            . "FROM tvibge_eventos e "
            . "WHERE aprovado=1 and status=0 and ativo=1 and (dt_final >= CURRENT_DATE) "
            . "ORDER BY dt_inicio, hora_inicio";
}
function selectProxModalView(){
    return "SELECT e.*, l.local "
            . "FROM tvibge_eventos e "
            . "JOIN tvibge_locais l ON e.fklocal = l.id "
            . "WHERE e.aprovado=1 and e.status=0 and e.ativo=1 and (e.dt_final >= CURRENT_DATE) and e.id = :id ;";
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

function selectPin(){
    return "SELECT pin FROM tvibge_eventos WHERE pin=:pin";
}

function insertEvento(){
    return "INSERT INTO tvibge_eventos (titulo, descricao_evento, dt_inicio, dt_final, hora_inicio, hora_final, fkuorg, fklocal, contato, contato_ramal, contato_fone, contato_email, contato_cel, 
            slides, chat, pergunta, enquete, observacao, sede, ue, agencia, externo, descricao_publico, aprovado, status, ativo, tvibge, webcast, pin)
            VALUES (:titulo, :desc_evento, :dtinicio, :dtfinal, :hrinicio, :hrfinal, :uorg, :local, :nome, :ramal, :telf, :email, :cell, :slide, :chat, :pergunta, :enquete,
            :observacao, :unisede, :ues, :agencia, :externos, :desc_publico, :aprovado, :status, :ativo, :tvibge, :webcast, :pin)";
}