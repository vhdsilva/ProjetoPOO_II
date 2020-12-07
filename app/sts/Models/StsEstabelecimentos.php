<?php


    namespace Sts\Models;

    use Sts\Models\helper\StsRead;

    if(!defined('URL')){
        header("Location: /projeto_poo/");
        exit();
    }

    class StsEstabelecimentos
    {
        private $Resultado;

        public function listar(){
            $listar = new StsRead();
            $listar->specificRead('SELECT * FROM sts_estabelecimentos WHERE adms_sit_id = 1' );
            $this->Resultado = $listar->getResultado();
            return $this->Resultado;
        }
    }







