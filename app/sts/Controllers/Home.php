<?php
    namespace Sts\Controllers;

    use Core\ConfigView;
    use Sts\Models\StsCarousels;

    if(!defined('URL')){
        header("Location: /projeto_poo/");
        exit();
    }

    class Home
    {
        private $Dados;

        public function principal() {

            $listarBanner = new StsCarousels();
            $this->Dados['banner'] = $listarBanner->listar();


            $carregarView = new ConfigView('sts/Views/home', $this->Dados);
            $carregarView->renderizar();
        }

    }