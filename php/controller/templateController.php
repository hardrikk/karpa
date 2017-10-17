<?php

require_once 'php/util/paginas.php';

function pg($pg) {
    if (isset($pg) && trim($pg)) {
        $pg = trim($pg);
        $pg = endereco($pg);
        $file = 'php/' . $pg . '.php';

        if (file_exists($file)) {
            return $file;
        } else {
            header("Location: ./?p=404");
            exit;
        }
    } else {
        return 'php/view/proxView.php';
    }
}

$ano = date("Y");

function title($pg) {
    switch ($pg) {
        case 'av':
            echo 'SITVI - Agendar Evento';
            break;
        case 'agv':
            echo 'SITVI - Eventos Aguardando Aprovação';
            break;
        case 'pv':
            echo 'SITVI - Eventos Próximos';
            break;
        case 'atv':
            echo 'SITVI - Eventos Anteriores';
            break;
        case 'ev':
            echo 'SITVI - Editar Evento';
            break;
        case 'eav':
            echo 'SITVI - Editar Evento';
            break;
        case 'lv':
            echo 'SITVI - Login';
            break;
        case 'avv':
            echo 'SITVI - Avaliar Evento';
            break;
        case 'aqv':
            echo 'SITVI - Eventos Arquivados';
            break;
        case 'rpv':
            echo 'SITVI - Eventos Reprovados';
            break;
        case 'exv':
            echo 'SITVI - Eventos Excluídos';
            break;
        case '404':
            echo 'Error 404';
            break;
    }
}

function navLogin() {
    if(!estarlogado()){
        $navLogin = "<li><a href=\"?p=lv\">ENTRAR <span class=\"glyphicon glyphicon-log-in\"></span></a></li>";
    }else{
        $usu = usuarioLogado();
        $navLogin = "<li><a>BEM VINDO, $usu->usuario</a></li><li><a href =\"?p=lm\">SAIR <span class=\"glyphicon glyphicon-log-out\"></span></a></li>";
    }
    return $navLogin;
}

function navAdmin(){
    if(estarLogado()){
        $navAdmin = "<li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    EVENTOS OCULTOS <span class=\"caret\"></span>
                                </a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"?p=aqv\">EVENTOS ARQUIVADOS</a></li>
                            <li><a href=\"?p=rpv\">EVENTOS REPROVADOS</a></li>
                            <li><a href=\"?p=exv\">EVENTOS EXCLUÍDOS</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    ADMINISTRAÇÃO <span class=\"caret\"></span>
                                </a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"?p=#\">ADMINISTRAR ACESSO</a></li>
                            <li><a href=\"?p=#\">ADMINISTRAR AO VIVO</a></li>
                            <li><a href=\"?p=#\">LOG</a></li>
                        </ul>
                    </li>";
    }else{
        $navAdmin = "";
    }
    return $navAdmin;
}
?>