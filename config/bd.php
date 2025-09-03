<?php 

    $servidor = "localhost";
    $usuario = "root";
    $senha = "root";
    $dbname = "crud";

    $conn = new mysqli($servidor, $usuario, $senha, $dbname);

    // Verificar conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);    
    }

    $conn->set_charset("utf8");
?>