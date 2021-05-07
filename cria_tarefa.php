<?php
header('Content-Type: application/json');
session_start();
include("conexao.php");

$tarefa = $_POST['tarefa'];
$usuario = $_SESSION['usuario'];

//$sql = "INSERT INTO listas (nome_tarefa) VALUES ('$tarefa') ";

// Cria nova table MySql
$sql = "create table {$usuario} (nome_tarefa varchar(1000) not null)";

if (mysqli_query($conexao, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}

if(!empty($_POST["tarefa"])){
	$insertComments = "INSERT INTO {$usuario} (nome_tarefa) VALUES ('$tarefa')";
	mysqli_query($conexao, $insertComments) or die("database error: ". mysqli_error($conexao));	
}

//$sql = "INSERT INTO {$usuario} (nome_tarefa) VALUES ('$tarefa')";

if($conexao->query($sql) === TRUE){
    echo json_encode("Comentário Salov!");
}

mysqli_close($conexao);


exit;

?>