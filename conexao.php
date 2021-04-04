<?php 
try{
	$db = new PDO("mysql:host=localhost;dbname=escola_tecnica", "root", "");
	
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
}
catch(PDOException $e){
	echo "Erro ao estabelecer conexao com Mysql: ". $e->getMessage();

}
	
?>