<?php


    namespace Sts\Controllers;
    use Core\ConfigView;
    use Sts\Models\StsProdutos;

    if(!defined('URL')){
        header("Location: /projeto_poo/");
        exit();
    }

    class Estabelecimento
    {
        private $Dados;

        public function principal($Metodo = null) {

            $listarProduto = new StsProdutos();
            $this->Dados['produtos'] = $listarProduto->listar($Metodo);

            $carregarView = new ConfigView('sts/Views/estabelecimento',$this->Dados);
            $carregarView->renderizar();

        }

    }