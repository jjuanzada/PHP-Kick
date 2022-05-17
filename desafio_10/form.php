<?php

    include "desafio_10-conexao.php";

    $nome = $_POST['nome'];
    $gen = $_POST['gen'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $texto = $_POST['texto'];

    if($gen == m){

        $gen = "o";
    }elseif($gen == "f"){

        $gen = "a";
    }else{

        $gen = "e";
    }

    $sql = "insert into contato (nome, telefone, email, genero, texto) values ('{$nome}', '{$tel}', '{$email}', '{$gen}', '{$texto}')";
    $connect->query($sql);

    function form_response($nome, $gen, $tel, $email, $texto){

        echo "<div class='container dark' > <div class='card text'> Obrigad".$gen." ".$nome." um email de confirmação foi enviado para ".$email." e uma mensagem para o número".$tel." com o texto : ".$texto.".</div> </div>";
    }
    
?>



<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resposta formulário</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://kit.fontawesome.com/4415fbfc59.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="styles/style_rules.css">
        <link rel="stylesheet" href="styles/style_body.css">
        <script src="scripts/validation.js"></script>
        <script src="scripts/switch_menu.js"></script>
    </head>
    <body>

        <?php
            form_response($nome, $gen, $tel, $email, $texto);
        ?>
        
    </body>
    </html>