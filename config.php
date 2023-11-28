<?php

    $dbHost = 'Localhost';
    $dbUsername = 'admin';
    $dbPassword = 'pingode1';
    $dbName = 'reservasa';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Sucesso";
    // }


?>