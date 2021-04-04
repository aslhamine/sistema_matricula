<?php
    include 'navbar.php';
?>

  <div class="container">
    <div class="row">
     <div class="col-lg-8">
        
    <form method="post" action="pesquisa.php">
        <div class="row">
            <div class="col-lg-8">
                <input type="text" name="filtro" id="fil" class="form-control" placeholder="Procure o estudante pelo nome!" required autofocus>
            </div>
            <div class="col-lg-4">
                <button type="submit" class="btn btn-success">Pesquisar</button>
            </div>
        </div>
    
    </form>
</div> 

<div class="col-lg-4">
    <marquee>
<?php 
    include '../conexao.php';

    $busca= $_POST['filtro'];
            $stmt= $db->prepare("select * from estudante where estudante like '%$busca%'");
            $stmt-> execute();

            $count= $stmt-> rowCount();
            if (isset($busca)) {
               
            
            if($count== 0){
                echo" Nenhum estudante encontrado para <strong>$busca</strong>!<br><br>";
            }
                if($count==1){
                    echo $count." estudante encontrado para <strong>$busca</strong>!<br><br>";
                }
                    if($count<>0 && $count<>1){
                        echo $count." estudantes encontrados para <strong>$busca</strong>!<br><br>";
                    }
             }     

            $estudantes = $stmt->fetchAll(PDO::FETCH_OBJ);
?></marquee>
    </div>
    </div>
</div>
<?php  
      include '../menu_admin.php';
?>
<div class="col-lg-10" style="width: 100%; height: 345px; overflow-y: scroll;">
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>ESTUDANTE</th>
            <th>SEXO</th>
            <th>DATA NASC.</th>
            <th>EMAIL</th>
            <th>TELEFONE</th>
            <th>ENDEREÇO</th>
            <th>EDITAR</th>
            <th>APAGAR</th>
        </tr>
    </thead>
    <?php 
        foreach ($estudantes as $estudante) {
            
     ?>
     <tbody>
    <tr>
        <td><?=$estudante->id_estudante?></td>
        <td><?=ucwords($estudante->estudante)?></td>
        <td><?=$estudante->sexo?></td>
        <td><?=$estudante->data_nascimento?></td>
        <td><?=$estudante->email?></td>
        <td><?=$estudante->telefone?></td>
        <td><?=ucwords($estudante->endereco)?></td>
        <td>
            <a style="margin-right: 10px" href="actualizar.php?id=<?=$estudante->id_estudante?>">
                <a style="margin-right: 10px" href="actualizar.php?id=<?=$estudante->id_estudante?>">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-repeat" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2.854 7.146a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L2.5 8.207l1.646 1.647a.5.5 0 0 0 .708-.708l-2-2zm13-1a.5.5 0 0 0-.708 0L13.5 7.793l-1.646-1.647a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0 0-.708z"/><path fill-rule="evenodd" d="M8 3a4.995 4.995 0 0 0-4.192 2.273.5.5 0 0 1-.837-.546A6 6 0 0 1 14 8a.5.5 0 0 1-1.001 0 5 5 0 0 0-5-5zM2.5 7.5A.5.5 0 0 1 3 8a5 5 0 0 0 9.192 2.727.5.5 0 1 1 .837.546A6 6 0 0 1 2 8a.5.5 0 0 1 .501-.5z"/>
                </svg>
            </a>
            </a>
        </td> 
        <td>
            <a style="margin-right: 10px" href="#" onclick="apagar(<?=$estudante->id_estudante?>)">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg>
            </a>
        </td>   
    </tr>
    </tbody>
    <?php 
        }
     ?>
</table>
</div>
<script>
    function apagar(id){
        var apagar = confirm('Deseja apagar esse registo?');
        if (apagar) {
            window.location.assign('apagar.php?id='+id);
        }
    }
</script>
