
<?php 
	include '../conexao.php';
	
	$stmt = $db->prepare ("DELETE FROM `estudante_curso` WHERE `estudante_curso`.`id_estudante_curso` = ?"); 
	$stmt->bindParam(1 , $id);
	$id= $_GET["id"];
	if($stmt->execute()){
		header('Location:inscritos.php');
	}
 ?>	