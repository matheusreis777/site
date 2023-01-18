<?php

$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

//verifica de a conexão deu erro
if ($mysqli->error) {
    die("Falha ao conectar no banco de dados: " . $mysqli->error);
}