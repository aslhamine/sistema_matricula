<?php 
	include "../conexao.php";
	include "navbar.php";
	include "menu_admin.php";
 ?>
<div class="col-lg-10" style="width: 100%; height: 345px; overflow-y: scroll;">

<table class="table table-hover table-striped" >
	<thead>
		<tr>
			<th>cod_estudante</th>
			<th>Estudante</th>
			<th>Curso</th>
			<th>Turno</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
		<?php
			include "../conexao.php";
			$stmt = $db->prepare ("select estudante.id_estudante, estudante.estudante, curso.curso, estudante_curso.id_estudante_curso, turma.turno from estudante, curso, estudante_curso, turma where turma.id_turma=estudante_curso.id_turma and estudante.id_estudante=estudante_curso.id_estudante and curso.id_curso=estudante_curso.id_curso order by estudante"); 
			$stmt->execute(); 
			$inscritos = $stmt->fetchAll(PDO::FETCH_OBJ); 	

			foreach ($inscritos as $inscrito) {
		?>
			<tr>
				<td><?=$inscrito->id_estudante?></td>
				<td><?=ucwords($inscrito->estudante)?></td>
				<td><?=$inscrito->curso?></td>
				<td><?=$inscrito->turno?></td>
				<td>
					<a style="margin-right: 10px" href="#" onclick="apagar(<?=$inscrito->id_estudante_curso?>)">
					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg>
					</a>
				</td>

			</tr>
		<?php
			}
		?>
	</tbody>	
</table>
</div>
<script>
	function apagar(id){
		var apagar = confirm('Deseja apagar esse registo?');
		if (apagar) {
			window.location.assign('apagar_inscricao.php?id='+id);
		}
	}
</script>
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