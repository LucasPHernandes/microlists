<?php
session_start();
$_SESSION['abrir_tarefa'] = true;
header('Location: painel.php');
?>