<?php
    require './adm/conexao.php';
    error_reporting(E_ERROR | E_PARSE);

    $bi1 = $_POST['bi1'];
    $bi2 = $_POST['bi2'];
    $bi3 = $_POST['bi3'];
    $bi4 = $_POST['bi4'];
    $aluno = $_POST['aluno'];
    $prof = $_POST['prof'];
    $curso = $_POST['curso'];
    
    $stmt = $mysqli->prepare("INSERT INTO notas (not_al_cod, not_pro_cod, not_cur_cod, not_bi_1, not_bi_2, not_bi_3, not_bi_4) VALUES(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iiidddd", $aluno, $prof, $curso, $bi1, $bi2, $bi3, $bi4);
    $stmt->execute();
    header('Location: ./notas.php');