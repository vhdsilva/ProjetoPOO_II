<?php
namespace Sts\Models\helper;


use PDO;

class StsRead extends StsConn
{
    private $Select;
    private $Values;
    private $Resultado;
    private $Query;
    private $Conn;

    public function getResultado(){
        return $this->Resultado;
    }

    public function execRead($Tabela = null, $Termos = null, $ParseString = null){
        if(!empty($ParseString)){
            parse_str($ParseString, $this->Values);
        }
        $this->Select = "select * from $Tabela $Termos";
        $this->exeInstrucao();
    }

    public function specificRead($Query, $ParseString = null ){
        $this->Select = $Query;
        if(!empty($ParseString)){
            parse_str($ParseString, $this->Values);
        }
        $this->exeInstrucao();
    }

    private function exeInstrucao(){
        $this->conexa();
        $this->getInstrucao();
        $this->Query->execute();
        $this->Resultado = $this->Query->fetchAll();
    }

    private function conexa(){
        $this->Conn = parent::getConn();
        $this->Query = $this->Conn->prepare($this->Select);
        $this->Query->setFetchMode(PDO::FETCH_ASSOC);
    }

    private function getInstrucao(){
        if( $this->Values ){
            foreach ($this->Values as $Link => $Valor){
                if($Link == 'limit'){
                    $Valor = (int) $Valor;
                    $this->Query->bindValue("$Link", $Valor, PDO::PARAM_INT);
                }else{
                    $this->Query->bindValue("$Link", $Valor, PDO::PARAM_STR);
                }
            }
        }
    }
}