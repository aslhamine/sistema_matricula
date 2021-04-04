<!DOCTYPE html>
<html lang="PT-pt">
<meta charset="utf-8">
<head>
	<title>Instituto Aslhamine</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

</head>

<body>
  <header>
		<nav class="navbar navbar-expand-sm bg-light navbar-info">
 			 <a class="navbar-brand" href="index.php"><img src="../imagens/logo.png" alt="logotipo" height="60px"></a> 
		</nav>
  </header>
<hr>

<h2 style="text-align:center">Seja Bem-vindo!</h2><br>
<div class="container">
	<br>
<form method="post" action="#">
	<div>
		<label class="badge badge-light" for="admin">Usuário:</label>
		<input type="text" name="admin" id="admin" placeholder="Digite o nome de usuário!" required class="form-control">
	</div>
	<br>
	<div>
		<label class="badge badge-light" for="password">Password:</label>
		<input type="password" name="password" id="password" placeholder="Digite a palavra passe!" required class="form-control">
	</div>

	<br>
	<input type="submit" value="Entrar" class="btn btn-success">

</form>
<br><br>
</div>
<br>

<?php

include '../conexao.php';

if (isset($_POST['admin']) && isset($_POST['password'])) {
	$admin = $_POST['admin'];
	$password = $_POST['password'];

	$stmt=$db->prepare("select * from admin where admin = '$admin' AND password = '$password'");
	$stmt->execute();
	
$count= $stmt->rowCount();

if($count==1){
	session_start(); 
	$_SESSION['login'] = true;
	$_SESSION['admin'] = $admin;

	header('location:../funcionario/estudantes.php');
}else{
	?>
	<script type="text/javascript">
		alert("Introduza os dados correctamente!")
	</script>
<?php  }
}
?>
<div class="container-fluid bg-dark">
    <footer >
        <div class="row">
            <div class="col-lg-11" style="color: whitesmoke; padding: 20px; text-align: center;">
                <h1>Instituto tecnico ASLHAMINE</h1>
            </div>
        </div>
    </footer>
    
  </div>
    <script type="text/javascript" src="../js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
