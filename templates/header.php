<?php
    include_once ("data/post.php");
    include_once ("data/categories.php");
    include_once ("hepers/url.php");


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $BASE_URL; ?>/css/style.css">

    <title>Reconstruindo o blog codar</title>
</head>
<body>
    <header>
        <div>
            <a href="<?= $BASE_URL; ?>" id="logo" >
                <img src="<?= $BASE_URL; ?>img/logo.svg" alt="logo">
            </a>
        </div>

        <nav>
            <ul class="container_lista">
                <li><a href="<?= $BASE_URL;?>" class="list">Home</a></li>
                <li><a href="#" class="list">Categorias</a></li>
                <li><a href="#" class="list">Sobre</a></li>
                <li><a href="<?= $BASE_URL; ?>contato.php" class="list">Contatos</a></li>
            </ul>
        </nav>
    </header>
