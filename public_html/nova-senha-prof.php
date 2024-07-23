<?php
    require './adm/conexao.php';
    
    error_reporting(E_ERROR | E_PARSE);

    $mysqli = mysqli_connect($server, $username, $password, $database); 
    
    /* verificando a submissão do formulário */
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $matricula = filter_input(INPUT_POST, 'T_matricula');
        
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
    
    $consulta = "UPDATE prof SET pro_senha='$senha_criptografada' WHERE pro_matricula='$matricula' ";
    
    if(!$mysqli->query($consulta)){
        echo "Os dados fornecidos não estão cadastrados";
        $mysqli->close();
    }
    else{
        echo "<h1>Valores alterados com sucesso!</h1><br><a href='../index.html'>Voltar ao login</a>";
    }
    
   
$mysqli->close();
?>