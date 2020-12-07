<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- chamando o arquivo css -->
    <link rel="stylesheet" href="<?php echo URL;?>/assets/css/style.css">

    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>

<form action="Login" class="form" method="POST">
    <div class="card">
        <div class="card-top">
            <img class="imglogin" src="img/user.png" alt="">
            <h2 class="title">Bem Vindo</h2>
            <p>Mãe, to com Fome!</p>
        </div>

        <?php
            //echo password_hash('1234', PASSWORD_DEFAULT);
        ?>
        <?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            if (isset($this->Dados['form'])) {
                $valorForm = $this->Dados['form'];
            }
        ?>

        <div class="card-group">
            <label for="">E-mail</label>
            <input type="email" name="email" id="" placeholder="Digite seu e-mail" required value="<?php if (isset($valorForm['email'])) {
                echo $valorForm['email'];
            } ?>">
        </div>

        <div class="card-group">
            <label for="">Senha</label>
            <input type="password" name="senha" id="" placeholder="Digite sua senha" required>
        </div>

        <div class="card-group">
            <label for=""><input type="checkbox"> Lembre-me</label>
        </div>

        <div class="card-group btn">
            <button type="submit" name="SendLogin" value="acessar">ACESSAR</button>
        </div>

        <div class="card-group btn">
            <p>Não possui uma conta? Crie uma agora.</p>
        </div>
</form>

<form action="cadastro.php" class="btncadastrar">
    <div class="card-group btn">
        <button type="submit" name="SendCad" value="cadastrar">CADASTRAR</button>
    </div>
</form>
</div>


</body>
</html>