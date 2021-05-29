<?php
    header('Content-Type: application/json');

    $tarefa = $_POST['tarefa'];

    $pdo = new PDO('mysql:host=127.0.0.1; dbname=microlists;', 'root', '');

    $stmt = $pdo->prepare('INSERT INTO lucas (tarefa) VALUES (:co)');
    $stmt->bindValue(':co', $tarefa);
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
        echo json_encode('Salvo');
    } else {
        echo json_encode('Não Salvo');
    }

?>