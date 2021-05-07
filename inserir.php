<?php
    header('Content-Type: application/json');

    session_start();
    include("conexao.php");

    $tarefa = $_POST['tarefa']
    $usuario = $_SESSION['usuario'];

    $sql = "INSERT INTO {$usuario} (nome_tarefa) VALUES ('$tarefa')";

    if($conexao->query($sql) === TRUE){
        echo json_encode("Comentário Salov!");
    }

    mysqli_close($conexao);

    exit;

    

?>