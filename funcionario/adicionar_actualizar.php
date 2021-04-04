<?php 
$accao = $_POST['accao'];
include '../conexao.php';

switch ($accao) {
	case 'adicionar':
		$stmt = $db-> prepare("INSERT INTO estudante (estudante, sexo, data_nascimento, email, telefone, endereco) VALUES (?,?,?,?,?,?)");
		break;
	
	case 'actualizar':
		$stmt = $db-> prepare("UPDATE estudante SET estudante=?, sexo=?, data_nascimento=?, email=?, telefone=?, endereco=? WHERE id_estudante=?");
		$stmt->bindparam(7, $id);
		break;	
		
}	
	$stmt->bindparam(1, $estudante);
	$stmt->bindparam(2, $sexo);
	$stmt->bindparam(3, $data);
	$stmt->bindparam(4, $email);
	$stmt->bindparam(5, $telefone);
	$stmt->bindparam(6, $endereco);

	
	$estudante = $_POST['estudante'];
	$sexo = $_POST['sexo'];
	$data = $_POST['data'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];

	$id = $_POST['id'];

	if($stmt->execute()){
		header('Location: estudantes.php');
	}

 ?>