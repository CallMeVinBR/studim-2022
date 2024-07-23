<?php session_start();
    if(empty($_SESSION['email'])){
        echo '<h1>Você não tem permissão para acessar esta página. <a href="../index.html">Ir para o login</a></h1>';
    } else {
?>
<html>
    <head>
        <title>Lançamento de notas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style_form-notas.css"  />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    
<body>
    <nav class="navbar bg-light shadow">
        <div class="container-fluid">
          <span style="margin-left: 6px;" class="navbar-brand mb-0 h1">Cursinho<span style="color:#66B539;">Popular</span></span>
          <!--botão sanduiche-->
          <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
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
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
    <?php
        require '../adm/conexao.php';
        
        error_reporting(E_ERROR | E_PARSE);
        
        $resultado1 = "SELECT * FROM aluno";
        $resultado2 = "SELECT * FROM prof";
        $resultado3 = "SELECT * FROM cursos";
        
        $mysqli = mysqli_connect($server, $username, $password, $database); 
    ?>
    <div class="form-align">
    <form method="POST" action="../add-notas.php">
    <table class="table table-borderless">
        <tbody>
        <th>
            <b><p>Notas</p></b>        
            <input type="number" class="inttext" step=".01" max="10" min="0" name="bi1" placeholder="Bim. 1" required>
            <input type="number" class="inttext" step=".01" max="10" min="0" name="bi2" placeholder="Bim. 2">
            <input type="number" class="inttext" step=".01" max="10" min="0" name="bi3" placeholder="Bim. 3">
            <input type="number" class="inttext" step=".01" max="10" min="0" name="bi4" placeholder="Bim. 4">
        </th>
        <th>
            <b><p class="txt-p">Aluno(a)</p></b>
            <select name="aluno" class="inttext">
                <?php if($resultado1 = $mysqli->query($resultado1)){ while ($row = $resultado1->fetch_assoc()){ ?>
                <option style="font-weight: bold;" value="<?=$row['al_cod'];?>"><?=$row['al_nome'];?></option>
                <?php } } ?>
            </select>
        </th>
        <th>
            <b><p class="txt-p">Professor(a)</p></b>
            <select name="prof" class="inttext">
                <?php if($resultado2 = $mysqli->query($resultado2)){ while($row = $resultado2->fetch_assoc()){ ?>
                <option style="font-weight: bold;" value="<?=$row['pro_cod'];?>"><?=$row['pro_nome'];?></option>
                <?php } } ?>
            </select>
        </th>
        <th>
            <b><p class="txt-p">Curso</p></b>
            <select name="curso" class="cursos">
                <?php if($resultado3 = $mysqli->query($resultado3)){ while($row = $resultado3->fetch_assoc()){ ?>
                <option style="font-weight: bold;" value="<?=$row['cur_cod'];?>"><?=$row['cur_nome'];?></option>
                <?php } } ?>
            </select>
        </th>
        </tbody>
    </table>
    </div>
    <br><br><input type="submit" value="Enviar" class="btn btn-success">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
<?php } ?>