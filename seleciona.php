<?php
    header('Content-Type: application/json');
    // include("cadast  rar.php");


    $pdo = new PDO('mysql:host=127.0.0.1; dbname=microlists;', 'root', '');

    $stmt = $pdo->prepare('SELECT * FROM lucas');
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
        echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
    } else {
        echo json_encode('Não selecionado nada.');
    }
?>