<?php
    namespace Sts\Controllers;

    use Core\ConfigView;
    use Sts\Models\StsEstabelecimentos;

    if(!defined('URL')){
        header("Location: /projeto_poo/");
        exit();
    }

    class Estabelecimentos
    {
        private $Dados;

        public function principal() {

            $listarEsta = new StsEstabelecimentos();
            $this->Dados['esta'] = $listarEsta->listar();

            $carregarView = new ConfigView('sts/Views/estabelecimentos', $this->Dados);
            $carregarView->renderizar();

        }

    }