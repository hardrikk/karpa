<?php
    session_start();
    ob_start();
?>
<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
include 'php/util/autoload.php';
include 'php/view/templateView.php';
?>