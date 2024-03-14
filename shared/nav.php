<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#000000" />

  <!-- ========== BOXICON ========== -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- ========== SWIPER ========== -->
  <link rel="stylesheet" href="./css/swiper-bundle.min.css" />

  <!-- ========== LOGO SITE ========== -->
  <link rel="shortcut icon" href="./images/logo.png" type="image/png" />

  <!-- ========== JSON ========== -->
  <link rel="manifest" href="./manifest.json" />

  <!-- ========== CSS ========== -->
  <link rel="stylesheet" href="./css/styles1.css" />
  <link href="./css/select2.min.css" rel="stylesheet" />

  <title>QueryCar</title>

</head>

<body>

  <!-- ========== HEADER ========== -->
  <header class="header" id="header">
    <nav class="nav container">
      <a href="#home" class="nav__logo">
        <div class="nav__logo-name">
          <h2>QUERY</h2>
        </div>
      </a>

      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="index.php#home" class="nav__link">HOME</a>
          </li>

          <li class="nav__item">
            <a href="index.php#dest" class="nav__link">STORE</a>
          </li>

          <li class="nav__item">
            <a href="index.php#contact" class="nav__link">CONTATO</a>
          </li>

          <li class="nav__item">
            <a href="./tabela.php" class="nav__link">FIPE</a>
          </li>

        </ul>
      </div>

      <div class="nav__menu_login">
        <?php
          if(isset($_SESSION['usuario_logado'])){
              $nome = $_SESSION["usuario_nome"];
              $foto = base64_encode($_SESSION['usuario_foto']);
              $tipo_foto = $_SESSION['usuario_tipo_foto'];
              echo "<p class='nav__link'>Olá,  $nome</p>";
              echo "<div id='menu-container'>";

              if($foto){
                  echo "<div id='foto-container'>";
                  echo "<img id='foto' src='data:$tipo_foto;base64,$foto'>";
                  echo "</div>";
              } else {
                  echo "<div id='foto-container'>";
                  echo "<i class='bx bxs-user-circle bx-lg' style='color:#ffffff' ></i>";
                  echo "</div>";
              }

              echo "<div class='nav__user' id='menu'>
                      <a href='./backend/sair.php'>Sair</a><br>
                      <a href='../backend/sair.php'>Perfil</a>
                    </div>";
              echo "</div>";
          } else {
              echo '<a href="./login.php" class="nav__login">LOGIN</a>';
          }
        ?>

      </div>
    </nav>
  </header>