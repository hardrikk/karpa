<?php

function gerarMensagem($mensagem) {
    $ref = ref();

    $men = "";
    if ($ref == 'p=av' || $ref == 'p=agv' || $ref == 'p=ev' || $ref == 'p=avv' || $ref == 'p=pv' || $ref == 'p=lv' || $ref == 'p=atv' || $ref == 'p=scv') {
        if (trim($mensagem)) {
            $men = "<div class=\"container\" align=\"center\">
                        <div style=\"display:inline-block;\" class=\"alert ";
            switch ($mensagem) {
                case 's':
                    $men .= "alert-success\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span></button>
                                <strong>Sucesso!</strong> Sua solicitação foi feita com sucesso. Para alteração na solicitação, utilize o Pin recebido por e-mail.";
                    break;
                case 'pi':
                    $men .= "alert-danger\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span></button>
                                <strong>PIN INVÁLIDO!</strong> Por favor, verifique o PIN digitado.";
                    break;
                case 'e':
                    $men .= "alert-success\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span></button>
                                <strong>Sucesso!</strong> Evento alterado com sucesso. ";
                    break;
                case 'aq':
                    $men .= "alert-success\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span></button>
                                <strong>Sucesso!</strong> Evento arquivado com sucesso. ";
                    break;
                case 'ex':
                    $men .= "alert-success\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span></button>
                                <strong>Sucesso!</strong> Evento excluído com sucesso. ";
                    break;
                case 'a':
                    $men .= "alert-success\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span></button>
                                <strong>Sucesso!</strong> Evento aprovado com sucesso. ";
                    break;
                case 'r':
                    $men .= "alert-success\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span></button>
                                <strong>Sucesso!</strong> Evento reprovado com sucesso. ";
                    break;
                case 'li':
                    $men .= "alert-danger\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span></button>
                                <strong>Acesso Negado!</strong> Usuário ou senha não conferem.";
                    break;
                case 'v':
                    $men .= "alert-danger\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span></button>
                                <strong>Formato Inválido!</strong> Formato de vídeo inválido.";
                    break;
                case 'ss':
                    $men .= "alert-success\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span></button>
                                <strong>Sucesso!</strong> Sessão cadastrada com sucesso.";
                    break;
            }
            $men .= "</div>
                </div>";
        }
    }
    return $men;
}
