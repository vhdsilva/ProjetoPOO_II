<?php
    namespace Sts\Controllers;

    use Core\ConfigView;
    use Sts\Models\StsLogin;

    if(!defined('URL')){
        header("Location: /projeto_poo/");
        exit();
    }

    class Login
    {
        private $Dados;

        public function principal() {

            $this->Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            if (!empty($this->Dados['SendLogin'])) {

                unset($this->Dados['SendLogin']);

                $visualLogin = new StsLogin();
                $visualLogin->acesso($this->Dados);
                if ($visualLogin->getResultado()) {
                    $UrlDestino = URL . 'home/index';
                    header("Location: $UrlDestino");
                } else {
                    $this->Dados['form'] = $this->Dados;
                }
            }

            //var_dump($this->Dados);

            $carregarView = new ConfigView('sts/Views/login', $this->Dados);
            $carregarView->renderizar();
        }
    }