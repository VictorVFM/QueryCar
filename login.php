<?php
include("backend/login.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./css/login.css">
    <title>Login</title>
</head>

<body>

    <div class="main">
        <h1 class="login__title_name">LOGIN <span class="span">FIPE</span></h1>
        <form class="form1" method="POST">
            <input class="un" type="email" placeholder="Email" name="email"required>
            <input class="pass" type="password" placeholder="Senha" name="senha" required>
            <?php
          if (isset($_GET["http"]) && $_GET["http"] == 404) {
            echo '<p class="login__btn_erro">Email ou senha incorretos. Tente novamente.</p>';
          }
          ?>
            <button class="submit" type="submit">Login</button>
            <div class="links">
                <a href="./sign.php"><u>Crie uma Conta</u></a>
                <a href="#">Esqueceu a Senha?</a>
                <a href="./index.php">Voltar ao Home?</a>
            </div>
        </form>
    </div>

</body>

</html>