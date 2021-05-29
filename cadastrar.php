<?php
session_start();
include("conexao.php");

$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from login where usuario = '$usuario' ";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('Location: index.php');
    exit;
}

$sqlb = "INSERT INTO login (usuario, senha) VALUES ('$usuario', '$senha')";

if($conexao->query($sqlb) === TRUE){
    $_SESSION['status_cadastro'] = true;
    $_SESSION['usuario'] = $usuario;
}

$sqla = "CREATE TABLE `microlists`.{$usuario} (
    `id` INT NOT NULL AUTO_INCREMENT,
    `tarefa` LONGTEXT NULL,
    PRIMARY KEY (`id`));
  ";
$lo = mysqli_query($conexao, $sqla);


if($conexao->query($sqla) === TRUE){
    echo "Certo!!";
    exit;
}

$conexao->close();

header('Location: index.php');
exit;
?>