<?php
include("verifica_login.php");
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MicroLists - Painel</title>
        <link rel="stylesheet" href="painel_style.css">
    </head>
    <body>
        <main>
            <div class="user">
                <p>Olá, <?php echo $_SESSION['usuario'];?></p>
                <!-- Nº de tarefas ainda não feitas -->
            </div>

            <div class="main">
                <input placeholder="Pesquise por suas lists" type="text">
                <form action="cria_tarefa.php" method="post">
                    <button id="plus_btn" type="submit"><img src="plus_ico.png" alt=""></button>
                </form>
                <div class="conteudo">

                </div>

            </div>

            <div class="pomo">
                <h2 class="tit">MICROLISTS</h2>

                <div class="relogio">
                    <p>Configure seu 🍅</p>
                    <!-- Timer -->

                    <p id="bold_time">
                        30:00
                    </p>

                    <div class="buttons">
                        <button>Play</button>
                        <button>Pause</button>
                    </div>
                </div>
                <div class="add_tarefa">
                    <form action="cria_tarefa.php" method="post">
                        <input type="text" placeholder="Tarefa">
                        <button type="submit">Ok</button>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>