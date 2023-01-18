<?php

include("protect.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Home</title>
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

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#myPage">Home</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about">Quem somos</a></li>
                    <li><a href="#services">Serviços</a></li>
                    <li><a href="#contact">Contato</a></li>
                    <li><a href="logout.php">Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <a href="https://wa.me/5567991068218?text=Ol%C3%A1%21" target="_blank"><svg viewBox="0 0 32 32"
            class="whatsapp-ico">
            <path
                d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z"
                fill-rule="evenodd"></path>
        </svg></a>

    <div class="jumbotron text-center">
        <h1>WENDEL DE FREITAS TENÓRIO</h1>
        <h3>ADVOGADO OAB-MS N° 26.599</h3>
    </div>
    <div id="about" class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                Bem vindo! <?php echo $_SESSION['nome']; ?>
                <h2>Quem Somos?</h2>
                <br />
                <h4>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </h4>
                <br />
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat
                    non proident, sunt in culpa qui officia deserunt mollit anim id est
                    laborum consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea commodo consequat.
                </p>
                <br />
                <button class="btn btn-success btn-lg" onclick="alerta()">
                    Entre em Contato
                </button>
            </div>
        </div>
    </div>
    <div id="services" class="container-fluid text-center">
        <h2>Serviços</h2>
        <h4 class="t-h4">O que nós oferecemos.</h4>
        <br />
        <div class="row slideanim">
            <div class="col-sm-4 card">
                <span class="glyphicon glyphicon-folder-open logo-small"></span>
                <h4 class="t-h4">Direito Penal</h4>
                <p>
                    Para o advogado que deseja trabalhar em ações referentes a crimes e
                    contravenções, o Direito Penal é a especialização perfeita. Com ela,
                    o advogado pode preparar e apresentar tanto a defesa quanto a
                    acusação de pessoas físicas ou jurídicas.
                </p>
            </div>
            <div class="col-sm-4 card" onclick="alerta()">
                <span class="glyphicon glyphicon-usd logo-small"></span>
                <h4 class="t-h4">Direito Civil</h4>
                <p>
                    Na advocacia civil, o profissional pode representar os interesses
                    individuais referentes a bens e propriedades, questões familiares
                    (como divórcio e heranças) e muito mais, dependendo da área de
                    especialização.
                </p>
            </div>
            <div class="col-sm-4 card">
                <span class="glyphicon glyphicon-lock logo-small"></span>
                <h4 class="t-h4">Direito Empresarial</h4>
                <p>
                    Essa é uma área da advocacia voltada para os aspectos jurídicos do
                    comércio. O advogado pode defender os empresários e sociedades
                    diante dos seus interesses comerciais e auxiliar em questões como
                    abertura e fechamento de um estabelecimento, elaboração de contratos
                    e estatutos sociais, marcas, patentes e processos de falência e
                    recuperação de empresa.
                </p>
            </div>
        </div>
        <div class="row slideanim">
            <div class="col-sm-4 card">
                <span class="glyphicon glyphicon-home logo-small"></span>
                <h4 class="t-h4">Direito do Consumidor</h4>
                <p>
                    Nesse ramo da advocacia, o profissional pode defender tanto o
                    cidadão em suas relações com fornecedores de bens e serviços quanto
                    os próprios fornecedores. A legislação básica do profissional da
                    área é o Código de Defesa do Consumidor.
                </p>
            </div>
            <div class="col-sm-4 card">
                <span class="glyphicon glyphicon-home logo-small"></span>
                <h4 class="t-h4">Direito Trabalhista</h4>
                <p>
                    A advocacia trabalhista uma das áreas de atuação do advogado mais
                    movimentadas no país! O advogado trabalhista atua na representação
                    de empresas ou pessoas em disputas entre empregado e empregador,
                    questões sindicais e de previdência social.
                </p>
            </div>
            <div class="col-sm-4 card">
                <span class="glyphicon glyphicon-user logo-small"></span>
                <h4 class="t-h4">Direito Tributário</h4>
                <p>
                    Neste tipo de direito, o advogado tributário cuida de normas e
                    princípios relativos à arrecadação de impostos e taxas, obrigações
                    tributárias e atribuições dos órgãos fiscalizadores.
                </p>
            </div>
        </div>
    </div>
    <div id="contact" class="container-fluid bg-grey">
        <h2 class="text-center">contato</h2>
        <div class="row">
            <div class="col-sm-8">
                <p>
                    <span class="glyphicon glyphicon-map-marker"></span> Av. Rachel de
                    Queiroz, 1468 - Jardim Aero Rancho, Campo Grande - MS, 79084-070
                </p>
                <p>
                    <span class="glyphicon glyphicon-phone"></span> +55 67 99106-8218
                </p>
                <p>
                    <span class="glyphicon glyphicon-envelope"></span>
                    wft.advogado@outlook.com
                </p>
                <i class="gg-instagram"><label
                        style="margin-left: 25px; cursor: pointer; font-style: normal"></label></i>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d934.1494098194355!2d-54.6450212!3d-20.5227142!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9486e5b024beeabd%3A0x61e46f69c86dbf62!2sGaleria%20Aero%20Rancho!5e0!3m2!1spt-BR!2sbr!4v1673441429820!5m2!1spt-BR!2sbr"
                    width="100%" height="300px" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" id="maps"></iframe>
            </div>
            <div class="col-sm-4 slideanim">
                <p>Entre em contato conosco e em breve retornaremos.</p>
                <form id="contact-form">
                    <label>Nome</label>
                    <input type="text" name="user_name" />
                    <label>Telefone</label>
                    <input type="text" maxlength="15" onkeyup="handlePhone(event)" name="contact_number" />
                    <label>E-mail</label>
                    <input type="email" name="user_email" />
                    <label>Menssagem</label>
                    <textarea name="message"></textarea>
                    <br />
                    <button id="" class="btn btn-warning btn-block" type="submit" value="Enviar">
                        Enviar
                    </button>
                </form>
            </div>
        </div>
    </div>
    <img src="https://wp.ebradi.com.br/wp-content/uploads/2020/11/post_thumbnail-e2d885a2d4f68f9c36da00bf9bff13cc-1080x675.jpg"
        class="w3-image w3-greyscale-min" style="width: 100%" />

    <footer class="container-fluid text-center">
        <a href="#myPage" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
    </footer>
</body>

</html>