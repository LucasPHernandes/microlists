<?php
include("verifica_login.php");
include("erros.php");
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Cache-control" content="no-cache">
        <title>MicroLists - Painel</title>
        <link rel="stylesheet" href="styles/painel_style.css">
    </head>
    <body>
        <main>
            <div class="user">
                <p id="nome">Olá, <?php echo $_SESSION['usuario']; $_SESSION['user'] = $_SESSION['usuario']; ?></p>
                <!-- Nº de tarefas ainda não feitas -->
            </div>

            <div class="main">
                <input placeholder="Pesquise por suas lists" type="text">

                <form action="abre_tarefas.php" method="post">
                    <button id="plus_btn" type="submit"><img src="img/plus_ico.png" alt=""></button>
                </form>

                <div class="box_task">

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

                <?php
                if($_SESSION['abrir_tarefa']):
                ?>
                <div class="add_tarefa">
                    <form id="form1"  method="POST">
                        <input type="text" id="n_tarefa" name="nome_tarefa" placeholder="Tarefa">
                        <input type="submit" class="btn" form="form1" value="Ok">
                    </form>
                </div>
                <?php 
                endif;
                unset($_SESSION['abrir_tarefa']);
                ?>
            </div>
        </main>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="master.js"></script>
    </body>
</html>