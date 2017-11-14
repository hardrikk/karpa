<?php
include 'php/controller/templateController.php';
$pg = isset($_GET['p']) ? $_GET['p'] : '';
$view = pg($pg);
$navLogin = navLogin();
$navAdmin = navAdmin();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
        <script src='js/jquery.dataTables.min.js'></script>
        <script src='https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js'></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="css/Supernice.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <link href="css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-datepicker3.standalone.css" rel="stylesheet" type="text/css"/>
        <script src="locales/bootstrap-datepicker.pt-BR.min.js" type="text/javascript"></script>
        <script src="js/validator.js" type="text/javascript"></script>
        <script src="js/validator.min.js" type="text/javascript"></script>
        <script src="js/jquery.mask.js" type="text/javascript"></script>
        <script src="js/js.js" type="text/javascript"></script>
        <script src="js/html5lightbox/html5lightbox.js" type="text/javascript"></script>
        <script defer="defer" src="//barra.brasil.gov.br/barra.js" type="text/javascript"></script>
        <title><?php title($pg); ?></title>
    </head>
    <body>
        <div id="barra-brasil" style="background:#7F7F7F; height: 5px; padding:0 0 0 0;display:block;"> 
            <ul id="menu-barra-temp" style="list-style:none;">
                <li style="display:inline; float:left;padding-right:10px; margin-right:10px; border-right:1px solid #EDEDED"><a href="http://brasil.gov.br" style="font-family:sans,sans-serif; text-decoration:none; color:white;">Portal do Governo Brasileiro</a></li> 
                <li><a style="font-family:sans,sans-serif; text-decoration:none; color:white;" href="http://epwg.governoeletronico.gov.br/barra/atualize.html">Atualize sua Barra de Governo</a></li>
            </ul>
        </div>
        <div class="container-fluid" id="header">
            <img id="logo" src='img/logo.png'>
            <div class="menu">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">AO VIVO</a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li><a href="?p=av">AGENDAR EVENTO</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    CALENDÁRIO <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="?p=pv">EVENTOS PRÓXIMOS</a></li>
                                    <li><a href="?p=atv">EVENTOS ANTERIORES</a></li>
                                    <li><a href="?p=agv">EVENTOS AGUARDANDO APROVAÇÃO</a></li>
                                </ul>
                            </li>
                            <?php echo $navAdmin; ?>
                        </ul>
                        <ul style="float: right;" class="nav navbar-nav"><?php echo $navLogin; ?></ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="container-fluid" id="content"><?php include $view; ?>  <button type="button" class="btn btn-primary loader">Show dialog</button></div>

        <div id="loader" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top:15%; overflow-y:visible;">
            <div class="modal-dialog modal-m">
                <div class="modal-content">
                    <div class="modal-header" style="background: white;"><h3 style="margin:0;">Carregando</h3></div>
                    <div class="modal-body">
                        <div class="progress progress-striped active" style="margin-bottom:0;"><div class="progress-bar" style="width: 100%"></div></div>
                    </div>
                </div>        
            </div>  
        </div>
        <div class="container-fluid" id="footer">
            <p>DI/GETEL</p>
            <p>© <?php echo $ano; ?> IBGE</p>
        </div>
    </body>
</html>
