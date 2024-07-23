<?php session_start();
    if(empty($_SESSION['email']) and empty($_SESSION['password'])){
        echo '<h1>Você não tem permissão para acessar esta página. <a href="../index.html">Ir para o login</a></h1>';
    } else {
?>
<!DOCTYPE html>
<html class="registro" lang="pt-br" style="overflow: visible">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles.css">
    <title>Registro</title>
     <link rel="icon" href="../img/logo.ico">
</head>

<body class="registro" style="overflow: hidden;">
    <?php
        require './conexao.php';
        error_reporting(E_ERROR | E_PARSE);

        $conta = $_GET['conta'];
    ?>
  <div class="row align-items-center h-100 ">
      <div class="col-8 col-md-3 col-xs-8 mx-auto l-form">
          
              <h1 class="regtxt">Registro</h1>
              <img class="row mx-auto" src="../img/logo.png" width="150" draggable="false">
 <center>
     <a <button href="registro.php" class="btn btn-primary me-md-2" type="button" style="background-color:green; border-color:green;">Aluno</button> </a>
     <a <button href="registro.php?conta=2"class="btn btn-primary" type="button" style="background-color:green; border-color:green;">Professor</button></a>
 </center>
 <br/>
              <?php if(!isset($conta)){?>
            <form action="aluno-registro.php" method="POST">
              <div class="form-group">
                  <input type="text" name="al_email" placeholder="Email" class="form-control i-form" required />
              </div>
              <div>
                  <input type="text" name="al_nome" placeholder="Nome" class="form-control i-form" required />
              </div>
              <br/>
              <div class="form-group">
                  <input type="text" name="al_ra" placeholder="R.A" class="form-control i-form" required />
                </div>
              <div class="form-group">
                  <input type="password" name="al_senha" placeholder="Senha" class="form-control i-form" required />
              </div>
              <br/>
             <div class="form-group">
                  <button type="submit" class="btn btn-dark btn-md btn-block" onclick="">Cadastrar</button>
              </div>
                <div class="form-group">
                 <a href="menu.php" style="text-decoration: none;"><div class="btn btn-dark btn-md btn-block">Cancelar</div></a>
              </div>
            </form>
              
              
            <?php } ?>
            <?php if($conta == 2){ ?>
            <form action="prof-registro.php" method="POST">
              <div class="form-group">
                  <input type="text" name="pro_email" placeholder="Email" class="form-control i-form" required />
              </div>
              <div>
                  <input type="text" name="pro_nome" placeholder="Nome" class="form-control i-form" required />
              </div>
              <br/>
              <div class="form-group">
                  <input type="text" name="pro_matricula" placeholder="Matrícula" class="form-control i-form" required />
                </div>
              <div class="form-group">
                  <input type="password" name="pro_senha" placeholder="Senha" class="form-control i-form" required />
              </div>
              <br/>
             <div class="form-group">
                  <button type="submit" class="btn btn-dark btn-md btn-block" onclick="">Cadastrar</button>
              </div>
              <div class="form-group">
                 <a href="menu.php" style="text-decoration: none;"><div class="btn btn-dark btn-md btn-block">Cancelar</div></a>
              </div>
            </form>
            <?php } ?>
            
      </div>
  </div>
  
  <script src="/script.js"></script>
  
</body>

</html>
<?php } ?>