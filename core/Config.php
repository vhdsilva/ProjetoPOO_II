<?php
    session_start();
    ob_start(); //Limpa o buffer de redirecionamento

    define('URL', 'http://localhost/projeto_poo/');
    define('URLADM', 'http://localhost/projeto_poo/adm/');

    define('CONTROLLER', 'Home');
    define('METODO', 'index');

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DBNAME', 'loja');
    define('PORT', '3306');