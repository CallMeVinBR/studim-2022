<html>
    <head>
        <title>Alterar senha</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../img/logo.ico">
        <link rel="stylesheet" href="/alt-senha.css">
        <link rel="stylesheet" href="animations.scss">
        <title>Nova Senha</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
<body style="background-image: url('/img/fundo.png'); overflow: hidden;">

<?php
    require './adm/conexao.php';
    error_reporting(E_ERROR | E_PARSE);

    $conta = $_GET['conta'];
    $a = $_GET['a'];

    if($a == "dados-err"){
        echo '<script>window.alert("Os dados fornecidos não estão cadastrados!")</script>';
    }
    
    if($a == "alt-ok"){
        echo '<script>window.alert("A senha foi alterada.")</script>';
    }
?>
<?php if(!isset($conta)){?>
<form method="POST" action="nova-senha-aluno.php">
    <div class="row align-items-center h-100 ">
        <div class="col-8 col-md-3 col-xs-8 mx-auto l-form">
                <p class="regtxt">Nova Senha</p>
                <div class="btns-conta">
                <a href="alt-senha.php" class="a-conta" style="text-decoration: none; color: white;"><div class="w3-btn w3-ripple w3-green" style="border-radius: 4px; box-shadow: none;">
                    Aluno
                </div></a>
                <a href="alt-senha.php?conta=2" class="a-conta" style="text-decoration: none; color: black;"><div class="w3-btn w3-white w3-border w3-border-green w3-round-xlarge" style="border-radius: 4px; box-shadow: none;">
                    Professor
                </div></a></div>
                <div class="form-group">
                    <input type="text" name="T_ra" placeholder="R.A"  value="<?=$row['al_ra']?>" class="form-control i-form">
                </div>
                <div class="form-group">
                    <input type="password" name="T_newsenha" placeholder= "Nova Senha" value= "<?=$row['al_senha']?>" class="form-control i-form">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-md btn-block" value="Alterar">Alterar</button>
                    <button type="reset" class="btn btn-dark btn-md btn-block">Cancelar</button>
              </div>
        </div>
    </div>
</form>
<?php } ?>
<?php if($conta == 2){ ?>
<form method="POST" action="nova-senha-prof.php">
    <form method="POST" action="nova-senha-prof.php">
    <div class="row align-items-center h-100">
        <div class="col-8 col-md-3 col-xs-8 mx-auto l-form">
                <p class="regtxt">Nova Senha</p>
                <div class="btns-conta">
                <a href="alt-senha.php" class="a-conta" style="text-decoration: none; color: black;"><div class="w3-btn w3-white w3-border w3-border-green w3-round-xlarge" style="border-radius: 4px; box-shadow: none;">Aluno
                </div></a>
                <a href="alt-senha.php?conta=2" class="a-conta" style="text-decoration: none; color: white;"><div class="w3-btn w3-ripple w3-green" style="border-radius: 4px; box-shadow: none;">
                    Professor
                </div></a>
                </div>
                <div class="form-group">
                    <input type="text" name="T_matricula" placeholder="Matrícula"  value="<?=$row['pro_matricula']?>" class="form-control i-form">
                </div>
                <div class="form-group">
                    <input type="password" name="T_newsenha" placeholder= "Nova Senha" value= "<?=$row['pro_senha']?>" class="form-control i-form">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-md btn-block" value="Alterar">Alterar</button>
                    <button type="reset" class="btn btn-dark btn-md btn-block">Cancelar</button>
                </div>
        </div>
    </div>
</form>
</form>
<?php } ?>
</body>
</html>
