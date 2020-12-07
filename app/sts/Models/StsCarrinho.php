<?php
    namespace Sts\Models;

    use Sts\Models\helper\StsRead;

    if(!defined('URL')) {
        header("Location: /projeto_poo/");
        exit();
    }

    class StsCarrinho
    {
        private $Resultado;

        public function index(){
            $listar = new StsRead();
            $listar->specificRead('
                        SELECT id_carrinho, usuarios.nome as cliente, sts_produtos.nome as produto, preco FROM sts_carrinho
                            JOIN sts_produtos ON sts_produtos.id_produto = sts_carrinho.id_produto
                            JOIN usuarios ON usuarios.idusuario = sts_carrinho.id_usuario
                            WHERE id_usuario = '.$_SESSION['usuario_id'].' and status = 0');
            $this->Resultado = $listar->getResultado();
            return $this->Resultado;
        }

        public function new ($Parametro){
            $listar = new StsRead();
            $listar->specificRead("
                        INSERT INTO sts_carrinho (id_carrinho, id_produto, id_usuario, status) VALUES (NULL, '".$Parametro."', '".$_SESSION['usuario_id']."', '0');
                        '");
            $this->Resultado = $listar->getResultado();
        }

    }