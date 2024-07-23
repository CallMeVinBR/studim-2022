<?php
    require './adm/conexao.php';
    
    error_reporting(E_ERROR | E_PARSE);
    
    /* verificando a submissão do formulário */
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $ra = filter_input(INPUT_POST, 'T_ra'); 
        
        if(isset($_POST['T_newsenha'])){
            $senha_inp = filter_input(INPUT_POST, 'T_newsenha', FILTER_DEFAULT);
            $senha_criptografada = password_hash($senha_inp,PASSWORD_DEFAULT);
        }
    }
    else{
        echo "<h1>Não foi possível executar a edição. [Err. 3]</h1>";
        exit();
    }
    
    if($mysqli->connect_errno){
        echo "<h3>Não foi possível se conectar ao Banco de Dados!</h3><br>Erro: " .$mysqli->connect_error;
        exit();
    }
    
   
    
    $consulta = "UPDATE aluno SET al_senha='$senha_criptografada' WHERE al_ra='$ra' ";
    
    if(!$mysqli->query($consulta)){
        header('Location: ./alt-senha.php?a=dados-err');
        $mysqli->close();
    }
    else{
        header('Location: ./alt-senha.php?a=alt-ok');
    }
    
   
$mysqli->close();