<?php
class evento {
    private $titulo;
    private $uorg;
    private $local;
    private $dtinicio;
    private $dtfinal;
    private $hrinicio;
    private $hrfinal;
    private $desc_evento;
    private $responsavel;
    private $email;
    private $telefone;
    private $ramal;
    private $celular;
    private $chat;
    private $slide;
    private $enquete;
    private $perguntas;
    private $observacao;
    private $sede;
    private $ue;
    private $agencia;
    private $externo;
    private $desc_publi;
    private $aprovado;
    private $status;
    private $ativo;
    private $tvibge;
    private $webcast;
    private $webexterno;
    private $pin;
 
    function __construct($obpost) {
        $this->setTitulo($obpost->titulo);
        $this->setUorg($obpost->uorg);
        $this->setLocal($obpost->local);
        $this->setDtinicio($obpost->dtinicio);
        $this->setDtfinal($obpost->dtfinal);
        $this->setHrinicio($obpost->hrinicio);
        $this->setHrfinal($obpost->hrfinal);
        $this->setDesc_evento($obpost->desc_evento);
        $this->setResponsavel($obpost->responsavel);
        $this->setEmail($obpost->email);
        $this->setTelefone($obpost->telefone);
        $this->setRamal($obpost->ramal);
        $this->setCelular($obpost->celular);
        $this->setChat(isset($obpost->chat)?$obpost->chat : '');
        $this->setSlide(isset($obpost->slide)?$obpost->slide : '');
        $this->setEnquete(isset($obpost->enquete)?$obpost->enquete : '');
        $this->setPerguntas(isset($obpost->perguntas)?$obpost->perguntas : '');
        $this->setObservacao($obpost->observacao);
        $this->setSede(isset($obpost->sede)?$obpost->sede : '');
        $this->setUe(isset($obpost->ue)?$obpost->ue : '');
        $this->setAgencia(isset($obpost->agencia)?$obpost->agencia : '');
        $this->setExterno(isset ($obpost->externo)?$obpost->externo : '');
        $this->setDesc_publi($obpost->desc_publico);
        $this->setTvibge(isset ($obpost->tvibge)?$obpost->tvibge : '');
        $this->setWebcast(isset ($obpost->webcast)?$obpost->webcast : '');
        $this->setWebexterno($obpost->webexterno);

    }
    
    function getTitulo() {
        return $this->titulo;
    }

    function getUorg() {
        return $this->uorg;
    }

    function getLocal() {
        return $this->local;
    }

    function getDtinicio() {
        return $this->dtinicio;
    }

    function getDtfinal() {
        return $this->dtfinal;
    }

    function getHrinicio() {
        return $this->hrinicio;
    }

    function getHrfinal() {
        return $this->hrfinal;
    }

    function getDesc_evento() {
        return $this->desc_evento;
    }

    function getResponsavel() {
        return $this->responsavel;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getRamal() {
        return $this->ramal;
    }

    function getCelular() {
        return $this->celular;
    }

    function getChat() {
        return $this->chat;
    }

    function getSlide() {
        return $this->slide;
    }

    function getEnquete() {
        return $this->enquete;
    }

    function getPerguntas() {
        return $this->perguntas;
    }

    function getObservacao() {
        return $this->observacao;
    }

    function getSede() {
        return $this->sede;
    }

    function getUe() {
        return $this->ue;
    }

    function getAgencia() {
        return $this->agencia;
    }

    function getExterno() {
        return $this->externo;
    }

    function getDesc_publi() {
        return $this->desc_publi;
    }

    function getAprovado() {
        return $this->aprovado;
    }

    function getStatus() {
        return $this->status;
    }

    function getAtivo() {
        return $this->ativo;
    }

    function getTvibge() {
        return $this->tvibge;
    }

    function getWebcast() {
        return $this->webcast;
    }

    function getWebexterno() {
        return $this->webexterno;
    }

    function getPin() {
        return $this->pin;
    }

    function setTitulo($titulo) {
        $this->titulo = validarCampo($titulo);
    }

    function setUorg($uorg) {
        $this->uorg = validarCampo($uorg);
    }

    function setLocal($local) {
        $this->local = validarCampo($local);
    }

    function setDtinicio($dtinicio) {
        $this->dtinicio = convertData2(validarCampo($dtinicio));
    }

    function setDtfinal($dtfinal) {
        $this->dtfinal = convertData2(validarCampo($dtfinal));
    }

    function setHrinicio($hrinicio) {
        $this->hrinicio = validarCampo($hrinicio);
    }

    function setHrfinal($hrfinal) {
        $this->hrfinal = validarCampo($hrfinal);
    }

    function setDesc_evento($desc_evento) {
        $this->desc_evento = validarCampo($desc_evento);
    }

    function setResponsavel($responsavel) {
        $this->responsavel = validarCampo($responsavel);
    }

    function setEmail($email) {
        $this->email = validarCampo($email);
    }

    function setTelefone($telefone) {
        $this->telefone = validarCampo($telefone);
    }

    function setRamal($ramal) {
        $this->ramal = validarCampo($ramal);
    }

    function setCelular($celular) {
        $this->celular = validarCampo($celular);
    }

    function setChat($chat) {
        $this->chat = validarCheck($chat);
    }

    function setSlide($slide) {
        $this->slide = validarCheck($slide);
    }

    function setEnquete($enquete) {
        $this->enquete = validarCheck($enquete);
    }

    function setPerguntas($perguntas) {
        $this->perguntas = validarCheck($perguntas);
    }

    function setObservacao($observacao) {
        $this->observacao = validarCampo($observacao);
    }

    function setSede($sede) {
        $this->sede = validarCheck($sede);
    }

    function setUe($ue) {
        $this->ue = validarCheck($ue);
    }

    function setAgencia($agencia) {
        $this->agencia = validarCheck($agencia);
    }

    function setExterno($externo) {
        $this->externo = validarCheck($externo);
    }

    function setDesc_publi($desc_publi) {
        $this->desc_publi = validarCampo($desc_publi);
    }

    function setAprovado($aprovado) {
        $this->aprovado = $aprovado;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

    function setTvibge($tvibge) {
        $this->tvibge = validarCheck($tvibge);
    }

    function setWebcast($webcast) {
        $this->webcast = validarCheck($webcast);
    }

    function setWebexterno($webexterno) {
        $this->webexterno = validarCampo($webexterno);
    }

    function setPin($pin) {
        $this->pin = $pin;
    }
}
