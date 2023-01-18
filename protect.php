<?php

//inicia a sessão
if (!isset($_SESSION)) {
    session_start();
}

//verifica se existe uma sessão iniciada pelo id
if (!isset($_SESSION['id'])) {
    die("Você não pode acessar essa página! Para acessar é necessário estar cadastrado. <p><a href=\"login.php\">Cadastre-se</a></p>");
}

?>