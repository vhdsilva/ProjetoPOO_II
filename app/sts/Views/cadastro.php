<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <!-- chamando o arquivo css -->
    <link rel="stylesheet" href="<?php echo URL;?>/assets/css/style.css">

    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>

<form action="logar.php" class="form" method="POST">
    <div class="card">
        <div class="card-top">
            <img class="imglogin" src="img/user.png" alt="">
            <h2 class="title">Bem Vindo</h2>
            <p>Não passe fome, crie uma conta agora e já peça seu rango!</p>
        </div>

        <div class="card-group">
            <label for="">Nome</label>
            <input type="nome" name="nome" id="" placeholder="Digite seu nome" required>
        </div>

        <div class="card-group">
            <label for="">E-mail</label>
            <input type="email" name="email" id="" placeholder="Digite seu e-mail" required>
        </div>

        <div class="card-group">
            <label for="">Senha</label>
            <input type="password" name="senha" id="" placeholder="Digite sua senha" required>
        </div>

        <div class="card-group">
            <label for=""><input type="checkbox"> Lembre-me</label>
        </div>

        <div class="card-group btn">
            <button type="submit">CADASTRAR</button>
        </div>

    </div>
</form>

</body>
</html>
