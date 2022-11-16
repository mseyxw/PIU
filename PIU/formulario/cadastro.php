<?php

if (isset($_POST ['submit'])) {
include_once ('config.php');

    $nome = ['nome'];
    $email = ['e-mail'];
    $senha = ['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$senha')");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <title>PIU - O Pintinho</title>
</head>

<body>
    <main class="container">
            <img src="favicon.ico" id="icon" alt="Piu">
            <h2>Cadastro</h2>
        <form action="index.php" method="POST">
            <div class="input-field">

            <div class="input-field">
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
                <div class="underline"></div>
            </div>

                <input type="text" name="e-mail" id="e-mail" placeholder="Digite seu e-mail">
                <div class="underline"></div>
            </div>

            <div class="input-field">
                <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
                <div class="underline"></div>
            </div>

            <input type="submit" value="Registrar" id = "Submit">

            <div class="register">
                <p>Já tem uma conta?</p>
                <a href="login.php">Faça o login!</a>
            </div>

        </form>
    
    </main>
</body>

</html>