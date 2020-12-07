<?php


namespace Core;


class ConfigView
{
    public $Arquivo;
    public $Dados;
    public function __construct($Arquivo, array $Dados = null){
        $this->Arquivo = (string) $Arquivo;
        $this->Dados = $Dados;
        //echo "View<br>";
    }

    public function renderizar(){
        if(file_exists('app/'.$this->Arquivo . '.php')){
            if (($this->Arquivo == "sts/Views/login") or ($this->Arquivo == "sts/Views/cadastro")){
                include_once 'app/'.$this->Arquivo . '.php';
            }else{
                include_once 'app/sts/Views/include/cabecalho.php';
                include_once 'app/sts/Views/include/menu.php';
                include_once 'app/'.$this->Arquivo . '.php';
                include_once 'app/sts/Views/include/rodape.php';
            }

        }
    }

}