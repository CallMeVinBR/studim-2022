<?php
require './adm/conexao.php';
session_start();
ob_start();
if (isset($_POST['email'])){
    
    $email = $_POST['email'];
    $senha = $_POST['password'];
    $senha_input = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);
    $senha_cripto = password_hash($senha_input, PASSWORD_DEFAULT);

    $result1 = mysqli_query($mysqli, "SELECT * FROM aluno");
    $result2 = mysqli_query($mysqli, "SELECT * FROM prof");
    $result3 = mysqli_query($mysqli, "SELECT * FROM adm");
    
    while ($row = mysqli_fetch_assoc($result1)){
        $senha_bd = $row['al_senha'];
        if(password_verify($senha_input, $senha_bd) and $row['al_email'] == $email){
            $_SESSION["password"] = $row['al_senha'];
            $_SESSION["email"] = $row['al_email'];
        
            header("Location: ./aluno/aluno.php");
        }
    }
    
    while ($row = mysqli_fetch_assoc($result2)){ 
        $senha_bd = $row['pro_senha'];
         if(password_verify($senha_input, $senha_bd) and $row['pro_email'] == $email){
            $_SESSION["password"] = $row['pro_senha'];
            $_SESSION["email"] = $row['pro_email'];
             
            header("Location: ./prof/professor.php");
        }
    }
    
    while ($row = mysqli_fetch_assoc($result3)){ 
        if($senha == $row['senha'] and $row['email'] == $email){
            $_SESSION["password"] = $row['senha'];
            $_SESSION["email"] = $row['email'];
             
         header("Location: ./adm/menu.php");
        }
    }
}

ob_end_flush();