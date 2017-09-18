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

function title($pg) {
    switch ($pg) {
        case 'av':
            echo 'Agendar Evento';
            break;
        case 'agv':
            echo 'Eventos Aguardando Aprovação';
            break;
        case 'pv':
            echo 'Eventos Próximos';
            break;
        case 'atv':
            echo 'Eventos Anteriores';
            break;
        case '404':
            echo 'Error 404';
            break;
    }
}
