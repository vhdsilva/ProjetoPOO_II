<?php


    namespace Sts\Models;


    use Sts\Models\helper\StsRead;

    class StsLogin
    {
        private $Dados;
        private $Resultado;

        function getResultado()
        {
            return $this->Resultado;
        }

        public function acesso(array $Dados)
        {
            $this->Dados = $Dados;

            $this->validarDados();

            if ($this->Resultado) {
                $validaLogin = new StsRead();
                $validaLogin->specificRead("SELECT * FROM usuarios WHERE email =:email LIMIT :limit", "email={$this->Dados['email']}&limit=1");
                $this->Resultado = $validaLogin->getResultado();
                if (!empty($this->Resultado)) {
                    $this->validarSenha();
                } else {
                    $_SESSION['msg'] = "<div class='alert alert-danger'>Erro: Usuário não encontrado!</div>";
                    $this->Resultado = false;
                }
            }
        }

        private function validarDados()
        {
            $this->Dados = array_map('strip_tags', $this->Dados);
            $this->Dados = array_map('trim', $this->Dados);
            if (in_array('', $this->Dados)) {
                $_SESSION['msg'] = "<div class='alert alert-danger'>Erro: Necessário preencher todos os campos!</div>";
                $this->Resultado = false;
            } else {
                $this->Resultado = true;
            }
        }

        private function validarSenha()
        {
            if (password_verify($this->Dados['senha'], $this->Resultado[0]['senha'])) {
                $_SESSION['usuario_id'] = $this->Resultado[0]['idusuario'];
                $_SESSION['usuario_nome'] = $this->Resultado[0]['nome'];
                $_SESSION['usuario_email'] = $this->Resultado[0]['email'];
                $_SESSION['usuario_sit'] = $this->Resultado[0]['sit'];
                $this->Resultado = true;
            } else {
                $_SESSION['msg'] = "<div class='alert alert-danger'>Erro: Usuário ou a senha incorreto!</div>";
                $this->Resultado = false;
            }
        }
    }