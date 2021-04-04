
	<?php 
		include "../conexao.php";
		include "navbar.php";
		include "menu_admin.php";

		$stmt = $db->prepare ("select * from estudante"); 
		$stmt->execute(); 
		$estudantes = $stmt->fetchAll(PDO::FETCH_OBJ); 
	 ?>

<div class="col-lg-10">
<form method="post" action="processar_matricula.php">
	<select class="form-control" name="escolha_estudante">
		<option>Selecione um estudante</option>
		<?php foreach ($estudantes as $estudante){?>
		<option value="<?=$estudante->id_estudante?>" >
			<?=$estudante->estudante?>
		</option><?php } ?>
	</select>
	<br><br>

	<?php  
		$stmt = $db->prepare ("select * from curso"); 
		$stmt->execute(); 
		$curso = $stmt->fetchAll(PDO::FETCH_OBJ); 	
	?>

	<select class="form-control" name="escolha_curso">
		<option>Selecione um curso</option>
		<?php foreach ($curso as $cur){?>
		<option value="<?=$cur->id_curso?>">
			<?=$cur->curso?>
		</option><?php } ?>
	</select><br><br>

	<?php  
		$stmt = $db->prepare ("select * from turma"); 
		$stmt->execute(); 
		$turma = $stmt->fetchAll(PDO::FETCH_OBJ); 	
	?>

	<select class="form-control" name="escolha_turma">
		<option>Selecione uma turma</option>
		<?php foreach ($turma as $tur){?>
		<option value="<?=$tur->id_turma?>">
			<?=$tur->turma?>
		</option><?php } ?>
	</select><br><br>

	<input type="submit" value="Inscrever" class="btn btn-success">

</form>
</div>
<div class="container-fluid bg-dark" style="position: fixed; bottom: 0;">
    <footer >
        <div class="row">
            <div class="col-lg-11" style="color: whitesmoke; padding: 15px; text-align: center;">
                <h3>Instituto tecnico ASLHAMINE</h3>
            </div>
        </div>
    </footer>
    
  </div>
    <script type="text/javascript" src="../js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>