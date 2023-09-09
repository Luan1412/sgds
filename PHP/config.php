<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = ''; 
$dbName = 'sgds';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_errno) {
    echo "Erro: " . $conexao->connect_error;
} else {
    echo "Conexão efetuada com sucesso";
}
?>

