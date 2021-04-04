<?php 
	include "../conexao.php";
	 	$escolha_estudante = $_POST["escolha_estudante"];
		 $escolha_curso = $_POST["escolha_curso"];
		 $escolha_turma = $_POST["escolha_turma"];

	$stmt = $db -> prepare("INSERT INTO `estudante_curso` (`id_estudante`, `id_curso`, id_turma) VALUES ($escolha_estudante, $escolha_curso, $escolha_turma)");
	
	if( $stmt -> execute() ){
		header('Location: inscritos.php');
	} 
 ?>