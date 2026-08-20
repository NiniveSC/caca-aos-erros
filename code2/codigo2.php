<?php

$host = "localhost";
$user = "root";
$password = "root";
$database = "caca_aos_erros";

$conexao = new mysqli($host, $user, $password, $database);

if ($conexao->connect_error) {
    die ("Erro na conexão: " . $conexao->connect_error);
}
