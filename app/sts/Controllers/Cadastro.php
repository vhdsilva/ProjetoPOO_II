<?php
    namespace Sts\Controllers;

    use Core\ConfigView;

    if(!defined('URL')){
        header("Location: /projeto_poo/");
        exit();
    }

    class Cadastro
    {
        private $Dados;
        public function principal() {

            $carregarView = new ConfigView('sts/Views/cadastro');
            $carregarView->renderizar();
        }
    }