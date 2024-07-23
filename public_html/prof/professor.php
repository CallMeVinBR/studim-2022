<?php session_start();
    if(empty($_SESSION['email'])){
        echo '<h1>Você não tem permissão para acessar esta página. <a href="../index.html">Ir para o login</a></h1>';
    } else {
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Professor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
   <link rel="icon" href="../img/logo.ico">

</head>
<body>
  <!--header-->
  <nav class="navbar bg-light shadow">
    <div class="container-fluid">
      <span style="margin-left: 6px;" class="navbar-brand mb-0 h1">Cursinho<span
          style="color:#008000;">Popular</span></span>
      <!--botão sanduiche-->
      <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <div class="texto">
    <h2>
      Bem-vindo ao
      <br>
      <span>Cursinho Popular Contexto</span>
    </h2>
  </div>
  <div class="agenda">
    <iframe src="https://calendar.google.com/calendar/embed?height=500&wkst=1&bgcolor=%2365b165&ctz=America%2FSao_Paulo&showTitle=0&showPrint=0&showCalendars=0&showTz=1&src=YXBuOTBwNmkxYmJ0dWEwNXI4b3VwN250ZjBAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%237CB342" style="border-width:0" width="500" height="500" frameborder="0" scrolling="no"></iframe>
  </div>
  <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Professor</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="list-group">
              <a href="professor.php" style="text-decoration: none"><button type="button" class="list-group-item list-group-item-action">Menu</button></a>
              <a href="arquivos.html" style="text-decoration: none"><button type="button" class="list-group-item list-group-item-action">Arquivos</button></a>
              <a href="notas.php" style="text-decoration: none"><button type="button" class="list-group-item list-group-item-action">Notas</button></a>
              <a href="form-notas.php" style="text-decoration: none"><button type="button" class="list-group-item list-group-item-action">Lançar Notas</button></a>

            <!--aa -->
          </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>

        </div>
      </div>
    </div>
  </div>

 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

 
</html>
<?php } ?>