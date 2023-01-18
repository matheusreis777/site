<?php
//incluir arquivo de conexão com banco de dados
include('conexao.php');

if (isset($_POST['enviar'])) {
    //valor de cada input
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //valida se todos campos estão preenchidos
    if (strlen($_POST['nome']) == 0) {

    } else if (strlen($_POST['email']) == 0) {
        echo 'Preencha o E-mail!';
    } else if (strlen($_POST['senha']) == 0) {
        echo 'Preencha a Senha!';
    } else {

        //consulta se já existe o email cadastrado
        $sql_code = "SELECT * FROM login WHERE email = '$email'";
        $sql_query = $mysqli->query($sql_code) or die("Falha a execução do código SQL:" . $mysqli->error);

        //quantidade de registros retornado da consulta
        $quantidade = $sql_query->num_rows;

        //se existir algum registro não permite inserir
        if ($quantidade == 1) {
            echo '<script>alert("E-mail já cadastrado!")</script>';
        } else {
            $sql = "INSERT INTO login (nome, email, senha)
             VALUES ('$nome', '$email', '$senha')";

            if ($mysqli->query($sql) === TRUE) {
                echo '<script>alert("Cadastro realizado com sucesso!")</script>';

                //redirecionar para pagina de login
                header("Location: login.php");
            } else {
                echo "Error: " . $sql . "<br>" . $mysqli->error;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro Login</title>
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

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

    <link rel="icon" type="image/png" href="./image/escala.png" />

    <script src="notify.min.js"></script>

    <script>

        function chamaNotificacao() {
            nome = document.getElementById('nome').value;
            email = document.getElementById('email').value;
            senha = document.getElementById('senha').value;

            if (nome == '' | email == '' | senha == '') {
                $.notify("É obrigatório preencher todos os campos!", "info");
            }
        }

    </script>
</head>

<body id="myPage-login" data-spy="scroll" data-target=".navbar" data-offset="60">
    <div class="container" id="pag-login">
        <form id="form-login" action="" method="POST">
            <label>Nome</label>
            <input type="text" display="none" name="nome" id="nome" required />
            <label>E-mail</label>
            <input type="text" name="email" id="email" required />
            <label>Senha</label>
            <input type="password" id="senha" autocomplete="off" name="senha" required />
            <br />
            <button type="submit" value="Enviar" onclick="chamaNotificacao()" name="enviar"
                class="g-recaptcha btn btn-success btn-block">
                Cadastrar
            </button>
            <br>
            <a href="login.php"><center>Fazer Login</center></a>
        </form>
    </div>

</body>

</html>