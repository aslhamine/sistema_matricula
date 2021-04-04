<?php 
	include '../conexao.php';

	$stmt = $db->prepare ("delete from estudante where id_estudante=?"); 
	$stmt->bindParam(1, $id);
	$id=$_GET['id'];
	if($stmt->execute()){
		header('Location:estudantes.php');
	}
 ?>