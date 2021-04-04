
<?php 
include "navbar.php";
	include '../conexao.php';
	include "menu_admin.php"; 
	$stmt = $db->prepare ("SELECT * FROM estudante WHERE id_estudante = ?");
	$stmt->bindParam(1, $id);
	$id=$_GET['id'];
	$stmt->execute();
	$estudante = $stmt->fetchAll(PDO::FETCH_OBJ);
	$e = $estudante[0];
	
	$id=$e->id_estudante;
	$estudante=	$e->estudante;
	$masculino=	($e->sexo=='Masculino')?'checked':'';
	$feminino=	($e->sexo=='Feminino')?'checked':'';
	$outro=($e->sexo=='Outro')?'checked':'';
	$data=$e->data_nascimento;
	$email=$e->email;
	$telefone=$e->telefone;
	$endereco=$e->endereco;

	$accao='actualizar';
	
 ?>

<div class="col-lg-10">

<form method="post" action="adicionar_actualizar.php">
	<fieldset class="form-group">
	<div class="row">

		<label for="nome" class="badge badge-light col-lg-1">Estudante:</label>&nbsp;
 		<input type="text" name="estudante" id="estudante" class="form-control col-lg-10" value="<?=$estudante?>" maxlength="50">
 		<input type="hidden" name="accao" value="<?=$accao?>">
		<input type="hidden" name="id" value="<?=$id?>">

	</div>

	<br>
	<div class="row">
 		<label class="badge badge-light col-lg-1" >Sexo:</label>&nbsp;
 			<input type="radio" name="sexo" id="m" value="Masculino" class="form-control col-lg-1" >
 		<label for="m">Masculino</label>&nbsp;&nbsp;
 			<input type="radio" name="sexo" id="f" value="Feminino" class="form-control col-lg-1">
 		<label for="f">Feminino</label>&nbsp;&nbsp;
 			<input type="radio" name="sexo" id="o" value="Outro"  class="form-control col-lg-1">
 		<label for="o">Outro</label>
	</div><br>
	<div class="row">
 		<label for="data" class="badge badge-light col-lg-2">Data de nascimento:</label>&nbsp;
 		<input type="date" name="data" id="data" value="<?=$data?>" class="form-control col-lg-3">
 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 		<label for="email" class="badge badge-light col-lg-1">Email:</label>&nbsp;
 		<input type="email" name="email" id="email" class="form-control col-lg-4" placeholder="usuario@provedor" value="<?=$email?>" maxlength="20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</div><br>
	<div class="row">
 		<label for="endereco" class="badge badge-light col-lg-1" >Telefone:</label>&nbsp;
 		<input type="text" name="telefone" id="telefone" value="<?=$telefone?>" class="form-control col-lg-3" placeholder="Digite o celular!" maxlength="10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 		<label for="endereco" class="badge badge-light col-lg-1" >Endereço:</label>&nbsp;
 		<input type="text" name="endereco" id="endereco" class="form-control col-lg-3" value="<?=$endereco?>" placeholder="Digite o endereço!" maxlength="10">&nbsp;&nbsp;
	</div><br>
	</fieldset>
	<br>

	
 	<input type="submit" value="Actualizar" class="btn btn-success">&nbsp;&nbsp;&nbsp;

</form>
 

 </div>
</div>
</div>
