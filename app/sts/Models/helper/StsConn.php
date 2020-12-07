<?php


namespace Sts\Models\helper;
use PDO;

if(!defined('URL')){
    header("Location: /pooii/");
    exit();
}


class StsConn
{
    private static $Host = HOST;
    private static $User = USER;
    private static $Pass = PASS;
    private static $DbName = DBNAME;
    private static $Port = PORT;
    private static $Connect = null;

    private static function conectar(){
        try {
            //'mysql:host=localhost;port=3306;dbname=banco,user,senha '
            if(self::$Connect == null){
                self::$Connect = new PDO('mysql:host='.self::$Host.';charset=utf8;port='.self::$Port.';dbname='.
                    self::$DbName,self::$User,self::$Pass);
            }
        }catch (\Exception $e){
            echo "Erro: " . $e->getMessage();
            die();
        }
        return self::$Connect;
    }

    public function getConn(){
        return self::conectar();
    }



}