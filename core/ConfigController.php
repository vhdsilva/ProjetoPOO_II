<?php
namespace Core;

class ConfigController
{
    private $Url;
    private $UrlConjunto;
    private $UrlController;
    private $UrlParametro;
    private $UrlMetodo;

    private static $Format;

    public function __construct()
    {
        if(!empty(filter_input(INPUT_GET,'url',FILTER_DEFAULT))){
            $this->Url = filter_input(INPUT_GET,'url',FILTER_DEFAULT);
            $this->limpaUrl();
            $this->UrlConjunto = explode("/",$this->Url);

            if(isset($this->UrlConjunto[0])){
                $this->UrlController = $this->slugController($this->UrlConjunto[0]);
            }else{
                $this->UrlController = CONTROLLER;
            }

            if(isset($this->UrlConjunto[1])){
                $this->UrlMetodo = $this->slugMetodo($this->UrlConjunto[1]);
            }else{
                $this->UrlMetodo = METODO;
            }

            if(isset($this->UrlConjunto[2])){
                $this->UrlParametro = $this->UrlConjunto[2];
            }else{
                $this->UrlParametro = null;
            }
        }else{
            $this->Url = CONTROLLER;
            $this->UrlController = CONTROLLER;
        }
/*
        echo "Controller" .$this->UrlController . "<br>";
        echo "Metodo" .$this->UrlMetodo. "<br>";
        echo "Parametro" .$this->UrlParametro. "<br>";*/
    }



    private function limpaUrl(){
        //Eliminar tags
        $this->Url = strip_tags($this->Url);
        //Elimina espaços em branco
        $this->Url = trim($this->Url);
        //Eliminar ultima barra
        $this->Url = rtrim($this->Url,"/");

        self::$Format = array();
        self::$Format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]?;:.,\\\'<>°ºª ';
        self::$Format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr--------------------------------';

        $this->Url = strtr(utf8_decode($this->Url) , utf8_decode(self::$Format['a']) , self::$Format['b']);
    }



    private function slugController($slugController){
        //Converter em minusculo
        $UrlController = strtolower($slugController);
        //Separar pelo -
        $UrlController = explode("-",$UrlController);
        //colocando e juntando com espaços
        $UrlController = implode(" ",$UrlController);
        //Coloca a primeira letra em maiusculo
        $UrlController = ucwords($UrlController);
        $UrlController = str_replace(" ","",$UrlController);
        //$UrlController = str_replace(" ","",ucwords(implode(" ",explode("-",strtolower($slugController)))));
        return $UrlController;
    }

    private function slugMetodo($slugMetodo){
        $UrlController = strtolower($slugMetodo);
        $UrlController = explode("-",$UrlController);
        $UrlController = implode(" ",$UrlController);
        $UrlController = str_replace(" ","-",$UrlController);
        return $UrlController;
    }

    public function carregar(){
        $classe = "\\Sts\\Controllers\\" . $this->UrlController ;
        if (class_exists($classe)){
            $classeCarregar = new $classe;
            if(isset($this->UrlParametro)){
                $classeCarregar->principal($this->UrlMetodo, $this->UrlParametro);
            }elseif(isset($this->UrlMetodo)){
                $classeCarregar->principal($this->UrlMetodo);
            }else{
                    $classeCarregar->principal();
            }
        }else {
            $this->UrlController = "Login";
            $this->carregar();
        }

    }
}