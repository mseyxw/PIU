<?php
    if (isset($_POST['submit']) && !empty($_POST['e-mail']) && !empty($_POST['senha'])) {

    include_once ('config.php');
    $email = $_POST['e-mail'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
    $result = $conexao -> query($sql);

        if (mysqli_num_rows($result) < 1) {
            header('Location: login.php');
        }
        else {
            header('Location: home.php');
        }
}

else {
    header('Location: index.php');
}
?>