<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./css/login1.css">
    <title>Sign</title>
</head>

<body>

    <div class="sign">
        <h1 class="login__title_name">SIGN <span class="span">FIPE</span></h1>
        <form class="form1" action="backend/cadastrar.php" method="POST" enctype="multipart/form-data">
            <input class="email" type="email" placeholder="Email" name="email" required>
            <input class="un" type="text" placeholder="Usuário" name="usuario" required>
            <input class="pass" type="password" placeholder="Senha" name="senha" required>

            <label class="custom-file-upload">
                Foto de perfil
                <input class="img_perf" type="file" name="foto" id="foto" onchange="updateFileName()" accept="image/*">
            </label>
            <span class="file-name" id="file-name"></span>

            <button class="submit" type="submit">Sign</button>
            <div class="links">
                <a href="./login.php">Login</a>
                <a href="./index.php">Voltar ao Home?</a>
            </div>
        </form>

        <script>
            function updateFileName() {
                var inputFile = document.getElementById('foto');
                var fileNameSpan = document.getElementById('file-name');

                if (inputFile.files.length > 0) {
                    fileNameSpan.textContent = 'Arquivo escolhido: ' + inputFile.files[0].name;
                } else {
                    fileNameSpan.textContent = '';
                }
            }
        </script>
    </div>

</body>

</html>
