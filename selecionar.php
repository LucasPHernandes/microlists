<?php
session_start();
include("conexao.php");
$commentQuery = "SELECT nome_tarefa FROM {$usuario} WHERE parent_id = '0' ORDER BY id DESC";
$commentsResult = mysqli_query($conexao, $commentQuery) or die("database error:". mysqli_error($conexao));
$commentHTML = '';
while($comment = mysqli_fetch_assoc($commentsResult)){
	$commentHTML .= '
		<div class="panel panel-primary">
		<div class="panel-heading">By <b>'.$comment["sender"].'</b> on <i>'.$comment["date"].'</i></div>
		<div class="panel-body">'.$comment["comment"].'</div>
		<div class="panel-footer" align="right"><button type="button" class="btn btn-primary reply" id="'.$comment["id"].'">Reply</button></div>
		</div> ';
	$commentHTML .= getCommentReply($conexao, $comment["id"]);
}
echo $commentHTML;
?>