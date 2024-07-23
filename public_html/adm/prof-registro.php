<?php
    require './conexao.php';

    error_reporting(E_ERROR | E_PARSE);
    
    $email = $_POST['pro_email'];
    $nome = $_POST['pro_nome'];
    $matricula = $_POST['pro_matricula'];
    
     if(isset($_POST['pro_senha'])){
        $senha_inp = filter_input(INPUT_POST, 'pro_senha', FILTER_DEFAULT);
        $senha_criptografada = password_hash($senha_inp,PASSWORD_DEFAULT);
    }

    $stmt = $mysqli->prepare("INSERT INTO prof (pro_email, pro_matricula, pro_nome, pro_senha) VALUES(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $email, $matricula, $nome, $senha_criptografada);
    $stmt->execute();

    header('Location: ./registro.php');