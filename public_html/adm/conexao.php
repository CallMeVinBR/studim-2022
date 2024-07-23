<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="studimdb";

        if(!($mysqli = mysqli_connect($server, $username, $password, $database))){
            header('Location: ../index.html');
        }