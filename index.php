<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>MAPA - BACKEND I</title>
</head>
<body>
    <header>
        <div class="logo">
        <img src="./images/logo.png" alt="">
        </div>
    </header>
    <nav>
        <ul class="menu">
        <a href="index.php"><li>Home</li></a>
        <a href="index.php?quemsomos=quemsomos.php"><li>Quem Somos</li></a>
        <a href="index.php?contatos=contatos.php"><li>Contatos</li></a>
        </ul>

    </nav>
    <main>
        

    <?php
        
        if (isset($_GET["quemsomos"]) && !empty($_GET["quemsomos"])) {
            $quemsomos = $_GET["quemsomos"];
            include("pages/quemsomos.php");
    
        } else if (isset($_GET["produto"]) && !empty($_GET["produto"])) {
            $produto = $_GET["produto"];
            include("pages/produto.php");
        
        
        
        } else if (isset($_GET["contatos"]) && !empty($_GET["contatos"])) {
            $contatos = $_GET["contatos"];
            include("pages/contatos.php");
        
        
        
        } else {
            include("pages/home.php");

        }
    ?>

    </main>
    <footer>
        <ul>
            <li>RA: 20030463-5</li>
            <li>ALUNO: IDMILSON RODRIGUES DE ALMEIDA JUNIOR</li>
            <li>CURSO: SISTEMAS PARA INTERNET</li>
            <li>DISCIPLINA: PROGRAMAÇÃO BACK END I - 53/2021</li>
        </ul>

    </footer>
</body>
</html>