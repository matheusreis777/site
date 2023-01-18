<?php

//incluir arquivo de conexão com banco de dados
include('conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {

    // verifica se o e-mail ou senha estão preenchidos
    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu E-mail.";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha sua Senha.";
    } else {

        //limpar os campos de e-mail e senha
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        //script para consultar se existe o usuario cadastrado
        $sql_code = "SELECT * FROM login WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        //retorna a quantidade de linhas da consulta
        $quantidade = $sql_query->num_rows;

        //verifica se a quantidade é igual a 1 cria a sessão
        if ($quantidade == 1) {

            //busca dados do banco de dados
            $usuario = $sql_query->fetch_assoc();

            //verifica se não existe sessão - se não existir cria uma nova
            if (!isset($_SESSION)) {
                session_start();
            }

            //armazena id e nome do usuario na sessão
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            //redirecionar para pagina home
            header("Location: home.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" />
    <link href="https://css.gg/instagram.css" rel="stylesheet" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

    <link rel="icon" type="image/png" href="./image/escala.png" />
</head>

<body id="myPage-login" data-spy="scroll" data-target=".navbar" data-offset="60">

    <div class="container" id="pag-login">
        <form id="form-login" action="" method="POST">
            <label>E-mail</label>
            <input type="text" name="email" />
            <label>Senha</label>
            <input type="password" name="senha" />
            <br />
            <button type="submit" class="g-recaptcha btn btn-success btn-block">
                Entrar
            </button>
            <br />
            <a>
                <center>Esqueceu sua senha?</center>
            </a>
            <a href="login-cadastro.php">
                <center>Cadastre-se</center>
            </a>
        </form>
    </div>
</body>

</html>