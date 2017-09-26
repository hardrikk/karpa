<?php

function gerarMensagem($mensagem) {
    $men = "";
    if (trim($mensagem)) {
        $men = "<div class=\"container\" align=\"center\">
                        <div style=\"display:inline-block;\" class=\"alert ";
        switch ($mensagem) {
            case 'e':
                $men .= "alert-danger\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span></button>
                                <strong>Acesso Negado!</strong> Usuário ou senha não conferem.";
                break;
        }
        $men .= "</div>
                </div>";
    }
    return $men;
}
