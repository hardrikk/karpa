<?php

class admin {
    public $usuario;
    public $senha;
    public $email;
    public $operador;
    public $substituto;
    public $admin;
    
    function logar($dado){
        extract($dado);
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->email = $email;
        $this->operador = $operador;
        $this->substituto = $substituto;
        $this->admin = $admin;
        
        session_start();
        $_SESSION['logado'] = serialize($this);
        
    }
    
    function logout(){
        unset($_SESSION['logado']);
    }
    
}
