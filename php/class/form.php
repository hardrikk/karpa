<?php

class form {

    public $titulo = "<input type=\"text\" class=\"form-control\" id=\"titulo\" name=\"titulo\" placeholder=\"Título do evento\" maxlength=\"100\" required ";
    public $uorg = "<select class=\"form-control\" id=\"uorg\" name='uorg' required>
                        <option value=\"\">Selecione uma opção</option>";
    public $listaUorg = " ";
    public $locais = "<select class=\"form-control\" id=\"local\" name=\"local\" disabled required>
                        <option value=\"\" class=\"0\">Selecione uma opção</option>";
    
    public function __construct() {
        $this->titulo .= "/>";
        $this->uorg .= form::gerarUorg();
        $this->locais .= form::gerarLocal();
    }
    static function gerarUorg() {
        $pdo = conectar();

        $query = selectUorg();
        $sql = $pdo->query($query)->fetchAll();

        $listaUorg = " ";
        foreach ($sql as $assoc) {
            $id = $assoc['id'];
            $nome = $assoc['nome'];
            $uf = $assoc['uf'];
            $listaUorg = $listaUorg . "<option value=\"$id\" class=\"$uf\">$nome</option>";
        }
        $listaUorg .= "</select>";
        $pdo = null;
        return $listaUorg;
    }

    static function gerarLocal() {
        $pdo = conectar();

        $query = selectLocais();
        $sql = $pdo->query($query)->fetchAll();

        $listaLocal = " ";
        $cont = 1;
        foreach ($sql as $assoc) {
            $id = $assoc['id'];
            $local = $assoc['local'];
            $opcao = $cont != 8 ? 1 : 2;
            $listaLocal = $listaLocal . "<option value=\"$id\" class=\"$opcao\">$local</option>";
            $cont++;
        }
        $listaLocal .= "</select>";
        $pdo = null;
        return $listaLocal;
    }

}
