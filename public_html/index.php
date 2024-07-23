<!doctype html>
<html class="login" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="animations.scss">
    <title>Login</title>
     <link rel="icon" href="../img/logo.ico">
</head>

<?php
    $a = $_GET['a'];

    if($a == "err"){
        echo '<script>window.alert("Usuário ou senha incorretos!");</script>';
    }
?>

<body class="login">
  <div class="row align-items-center h-100 ">
      <div class="col-8 col-md-3 col-xs-8 mx-auto l-form">
          <form action="config-login.php" method="post">
              <p class="regtxt">Login</p>
              <img class="row mx-auto" src="img/logo.png" width="150" draggable="false">
              <div class="form-group">
                  <input type="text" name="email" placeholder="Email" class="form-control i-form">
              </div>
              <div class="form-group">
                  <input type="password" name="password" placeholder="Senha" class="form-control i-form">
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-dark btn-md btn-block">Login</button>
                  <button type="reset" class="btn btn-dark btn-md btn-block">Cancelar</button>
              </div>
              <p class="p1"><a class="a1" href="alt-senha.php"> Esqueceu a senha?</a></p>
          </form>
      </div>
  </div>

</body>


</html>