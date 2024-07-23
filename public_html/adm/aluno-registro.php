<?php
    require './conexao.php';

    error_reporting(E_ERROR | E_PARSE);
    
    $email = $_POST['al_email'];
    $nome = $_POST['al_nome'];
    $ra = $_POST['al_ra'];
    
    if(isset($_POST['al_senha'])){
        $senha_inp = filter_input(INPUT_POST, 'al_senha', FILTER_DEFAULT);
        $senha_criptografada = password_hash($senha_inp,PASSWORD_DEFAULT);
    }
    
    $stmt = $mysqli->prepare("INSERT INTO aluno (al_email, al_ra, al_nome, al_senha) VALUES(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $email, $ra, $nome, $senha_criptografada);
    $stmt->execute();
    
    header('Location: ./registro.php');