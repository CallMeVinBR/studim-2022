<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="aluno.css" />
  <link rel="icon" href="../img/logo.ico">
</head>
<body>
    <nav class="navbar bg-light shadow">
    <div class="container-fluid">
      <span style="margin-left: 6px;" class="navbar-brand mb-0 h1">Cursinho<span
          style="color:green;">Popular</span></span>
      <!--botão sanduiche-->
      <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <div class="col-lg-12">
    <table class="table table-striped table-hove">
        <tr>
            <th class="col-md-1 col-sm-1" scope="col">Aluno</th>
            <th class="col-md-1 col-sm-1" scope="col">Professor</th>
            <th class="col-md-1 col-sm-1" scope="col">Curso</th>
            <th class="col-md-1 col-sm-1" scope="col">Bim. 1</th>
            <th class="col-md-1 col-sm-1" scope="col">Bim. 2</th>
            <th class="col-md-1 col-sm-1" scope="col">Bim. 3</th>
            <th class="col-md-1 col-sm-1" scope="col">Bim. 4</th>
            <th class="col-md-1 col-sm-1" scope="col">Média final</th>
        </tr>
    <?php
    require '../adm/conexao.php';
    error_reporting(E_ERROR | E_PARSE);
    
    $consulta = "SELECT * FROM notas LEFT JOIN (aluno CROSS JOIN prof CROSS JOIN cursos) ON (aluno.al_cod=notas.not_al_cod AND prof.pro_cod=notas.not_pro_cod AND cursos.cur_cod=not_cur_cod)";
    
    if(!$consulta = $mysqli->query($consulta)){
        echo 'Erro na consulta: ' .$mysqli->error;
    }
    else{
        while($row = $consulta->fetch_assoc()){
            $media = ($row['not_bi_1'] + $row['not_bi_2'] + $row['not_bi_3'] + $row['not_bi_4']) / 4;
            echo '
                    <tr>
                        <td>'.$row['al_nome'].'</td>
                        <td>'.$row['pro_nome'].'</td>
                        <td>'.$row['cur_nome'].'</td>
                        <td>'.$row['not_bi_1'].'</td>
                        <td>'.$row['not_bi_2'].'</td>
                        <td>'.$row['not_bi_3'].'</td>
                        <td>'.$row['not_bi_4'].'</td>
                        <td>'.$media.'</td>
                    </tr>
            ';
        }
    
    $consulta->free();
    $mysqli->close();
    }
?>
</table>
<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Aluno</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="list-group">
              <a href="aluno.php" style="text-decoration: none"><button type="button" class="list-group-item list-group-item-action">Menu</button></a>
              <a href="arquivos.html" style="text-decoration: none"><button type="button" class="list-group-item list-group-item-action">Arquivos</button></a>
              <a href="notas.php" style="text-decoration: none"><button type="button" class="list-group-item list-group-item-action">Notas</button></a>

            <!--aa -->
          </div>



        </div>
        <div class="modal-footer">
         
        </div>
      </div>
    </div>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>