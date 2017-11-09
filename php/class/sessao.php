<?php

class sessao {
    private $id;
    private $fkevento;
    private $titulo;
    private $palestrante;
    private $orgao;
    private $descricao;
    private $hrInicio;
    private $hrFinal;
    private $data;
    private $observacao;
    
    public function validarSessao($obpost, $id){
        $this->setFkevento($id);
        $this->setTitulo($obpost->titulo);
        $this->setPalestrante($obpost->palestrante);
        $this->setOrgao($obpost->orgao);
        $this->setDescricao($obpost->desc_sessao);
        $this->setHrInicio($obpost->hrinicio);
        $this->setHrFinal($obpost->hrfinal);
        $this->setData($obpost->data);
        $this->setObservacao($obpost->observacao);
    }
    
//    static function gerarSessaoID($id){
//        $pdo = conectar();
//        $query = selectEventoID();
//        $stmt = $pdo->prepare($query);
//        $stmt->bindParam(":id", $id);
//        $stmt->execute();
//        $row = $stmt->fetch(PDO::FETCH_ASSOC);
//        $pdo = null;
//        $stmt = null;
//        return $row;
//    }
    
    
    function getId() {
        return $this->id;
    }

    function getFkevento() {
        return $this->fkevento;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getPalestrante() {
        return $this->palestrante;
    }

    function getOrgao() {
        return $this->orgao;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getHrInicio() {
        return $this->hrInicio;
    }

    function getHrFinal() {
        return $this->hrFinal;
    }

    function getData() {
        return $this->data;
    }

    function getObservacao() {
        return $this->observacao;
    }

    function setId($id) {
        $this->id = validarCampo($id);
    }

    function setFkevento($fkevento) {
        $this->fkevento = validarCampo($fkevento);
    }

    function setTitulo($titulo) {
        $this->titulo = validarCampo($titulo);
    }

    function setPalestrante($palestrante) {
        $this->palestrante = validarCampo($palestrante);
    }

    function setOrgao($orgao) {
        $this->orgao = validarCampo($orgao);
    }

    function setDescricao($descricao) {
        $this->descricao = validarCampo($descricao);
    }

    function setHrInicio($hrInicio) {
        $this->hrInicio = validarCampo($hrInicio);
    }

    function setHrFinal($hrFinal) {
        $this->hrFinal = validarCampo($hrFinal);
    }

    function setData($data) {
        $this->data = convertData2(validarCampo($data));
    }

    function setObservacao($observacao) {
        $this->observacao = validarCampo($observacao);
    }
}
