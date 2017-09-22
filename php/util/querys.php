<?php
function selectProxView(){
    return "SELECT * 
            FROM sitvi_evento
            WHERE aprovado=1 and status=0 and ativo=1 and (dt_final >= CURRENT_DATE) 
            ORDER BY dt_inicio DESC, hr_inicio ASC";
}
function selectProxModalView(){
    return "SELECT e.*, l.local "
            . "FROM sitvi_evento e "
            . "JOIN sitvi_local l ON e.fklocal = l.id "
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
    return "SELECT id, dt_inicio, hr_inicio, titulo, responsavel "
            . "FROM sitvi_evento "
            . "WHERE aprovado=0 and status=0 and ativo=1 and (dt_inicio >= CURRENT_DATE) "
            . "ORDER BY dt_inicio, hr_inicio";
}
function selectUorg(){
    return "SELECT * FROM sitvi_uorg";
}

function selectLocais(){
    return "SELECT * FROM sitvi_local";
}

function selectPin(){
    return "SELECT pin FROM sitvi_evento WHERE pin=:pin";
}

function insertEvento(){
    return "INSERT INTO sitvi_evento (titulo, desc_evento, dt_inicio, dt_final, hr_inicio, hr_final, fkuorg, fklocal, responsavel, email, telefone, ramal, celular, 
            slide, chat, pergunta, enquete, observacao, sede, ue, agencia, externo, desc_publico, pin)
            VALUES (:titulo, :desc_evento, :dtinicio, :dtfinal, :hrinicio, :hrfinal, :uorg, :local, :nome, :email, :telf, :ramal, :cell, :slide, :chat, :pergunta, :enquete,
            :observacao, :unisede, :ues, :agencia, :externos, :desc_publico, :pin)";
}

function selectPinEvento(){
    return "SELECT id, pin FROM sitvi_evento WHERE id=:id and pin=:pin";
}