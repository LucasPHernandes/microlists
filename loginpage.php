<?php
session_start();
include("erros.php");
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MicroLists - Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <a href="index.php">
        <img src="icon_cadast.png" id="img_cadast" alt="">
        </a>
        <h1 id="sideTitle">MICROLISTS</h1>
        

        <div class="informacao">
        <?php
            if($_SESSION['login_errado']):
            ?>
            <div class="notification is-success">
                <p>Username ou senha erradas!</p>
                <p>Ou faça cadastro <a href="index.php">aqui</a></p>
            </div>
            <?php 
            endif;
            unset($_SESSION['login_errado']);
            ?>
         </div>

        <div class="sigIn">
            

            
            <h2 id="title">MICROLISTS</h2>
            

            <form action="login.php" method="POST" class="form">
                <input type="text" name="usuario" placeholder="Username" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <button type="submit">Login</button>
            </form>
        
        </div>
        
    </body>
</html>