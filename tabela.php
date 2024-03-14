<?php
include("shared/nav.php");
?>

  <!-- ========== MAIN ========== -->
  <main class="main" id="main">

    <!-- ========== CONSULTA ========== -->
    <section class="cons section" id="cons">
      <h1 class="cons__title_name">TABELA <span class="span">FIPE</span></h1>
      <div class="cons__container">
        <div class="form" id="form">
          <h2>Automóveis</h2>
          <label>
            <h4>Mês de referência</h4>
            <select class="busca" id="referencia" disabled onchange="changeReferencia()">
              <option value="">-</option>
            </select>
          </label>

          <label>
            <h4>Típo de veículo</h4>
            <select class="busca" id="tipo_veiculo" disabled onchange="changeTipoVeiculo()">
              <option value="">-</option>
              <option value="1">🚗&nbsp;&nbsp;Carro</option>
              <option value="2">🏍️&nbsp;&nbsp;Moto</option>
              <option value="3">🚚&nbsp;&nbsp;Caminhão</option>
            </select>
          </label>

          <label>
            <h4>Marca</h4>
            <select class="busca" id="marca" disabled onchange="changeMarca()">
              <option value="">-</option>
            </select>
          </label>

          <label>
            <h4>Modelo</h4>
            <select class="busca" id="modelo" disabled onchange="changeModelo()">
              <option value="">-</option>
            </select>
          </label>

          <label>
            <h4>Ano / Combustível</h4>
            <select class="busca" id="ano" disabled>
              <option value="">-</option>
            </select>
          </label>

          <p>
            <button type="button" id="search" disabled>Consultar</button>
          </p>
        </div>

        <div class="resultado" id="resultado"></div>

      </div>
    </section>
  </main>

  <!-- ========== FOOTER ========== -->
  <footer class="footer" id="footer">

    <div class="footer__container container">
      <h1 class="footer__title">QueryCar</h1>

      <ul class="footer__list">
          <a href="./index.php#home" class="footer__link">HOME</a>
          <a href="./index.php#dest" class="footer__link">STORE</a>
          <a href="#cons" class="footer__link">FIPE</a>
          <a href="./index.php#contact" class="footer__link">CONTATO</a>
      </ul>
    </div>

    <span class="footer__copy">Copyright (c) 2023 <span>FATEC-Campinas</span>. All Rights Reserved</span>
  </footer>


  <!-- ========== JS ========== -->
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <script>
    if ("serviceWorker" in navigator) {
      window.addEventListener("load", () => {
        navigator.serviceWorker.register("./js/sw.js");
      });
    }

    $(document).ready(function () {
      $('.busca').select2();
    });

  </script>

  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
  <script defer src="./js/app.js"></script>
  <script src="./js/change.js"></script>


</body>

</html>