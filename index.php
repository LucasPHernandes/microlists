<?php
session_start();
include("erros.php");
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MicroLists - Cadastrar</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>

   
        <h1 id="sideTitle">MICROLISTS</h1>
        

        <div class="informacao">
            <?php
            if($_SESSION['status_cadastro']):
            ?>
            <div class="notification is-success">
                <p>Cadastro efetuado!</p>
                <p>Faça login informando o seu usuário e senha <a href="loginpage.php">aqui</a></p>
            </div>
            <?php 
            endif;
            unset($_SESSION['status_cadastro']);
            ?>
            <?php
            if($_SESSION['usuario_existe']):
            ?>
            <div class="notification is-info">
                   <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                <p>Ou faça login informando o seu usuário e senha <a href="loginpage.php">aqui</a></p>
            </div>
            <?php 
            endif;
            unset($_SESSION['usuario_existe']);
            ?>
         </div>

        <div class="sigIn">
            

            
            <h2 id="title">MICROLISTS</h2>
            

            <form action="cadastrar.php" method="POST" class="form">
                <input type="text" name="usuario" placeholder="Username" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <button type="submit">Cadastrar</button>
            </form>
        
        </div>
        
    </body>
</html>