<?php


    namespace Sts\Models;

    use Sts\Models\helper\StsRead;

    if(!defined('URL')){
        header("Location: /projeto_poo/");
        exit();
    }

    class StsProdutos
    {
        private $Resultado;

        public function listar($Parametro){
            $listar = new StsRead();
            $listar->specificRead("SELECT id id_esta, titulo, slug, id_produto, nome, preco, sts_produtos.descricao, imagem_produto FROM sts_estabelecimentos
LEFT JOIN sts_produtos ON sts_produtos.id_estabelecimento = sts_estabelecimentos.id
WHERE slug = '$Parametro'");
            $this->Resultado = $listar->getResultado();
            return $this->Resultado;
        }
    }







