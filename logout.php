<?php

//verifica a sessão
if(!isset($_SESSION)) {
    session_start();
}

//encerra a sessão
session_destroy();

//redireciona para tela de login
header("Location: login.php");

?>