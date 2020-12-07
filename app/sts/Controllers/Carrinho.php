<?php
    namespace Sts\Controllers;

    use Core\ConfigView;
    use Sts\Models\StsCarrinho;

    if(!defined('URL')){
        header("Location: /projeto_poo/");
        exit();
    }

    class Carrinho
    {
        private $Dados;

        public function principal($Metodo = null, $Parametro = null)
        {

            if($Metodo == 'new'){
                $listarCarrinho = new StsCarrinho();
                $listarCarrinho->new($Parametro);
                header('Location: '. URL . "carrinho/index");
            }elseif($Metodo == 'up'){

            }
            else{
                $listarCarrinho = new StsCarrinho();
                $this->Dados['carrinho'] = $listarCarrinho->index();
                $carregarView = new ConfigView('sts/Views/carrinho', $this->Dados);
                $carregarView->renderizar();
            }



        }
    }