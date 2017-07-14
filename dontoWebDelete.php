<!DOCTYPE html>
<html lang"pt-br">
<html>
<head>
	<meta charset="UTF-8"/>
	<title>DontoWeb</title>
	<style>
		h1 {
			font-family: Arial;
			font-size: 30pt;
			color: red;
			text-shadow: 2px 2px 2px black;
		}
	</style>
</head>
<body>
		<?php include("dontoWebTelaAtend.php"); ?>
<div>		
<?php
	include ("conexao.php");
	$id = $_GET['id'];
	
	$del = "DELETE FROM cadastro_paciente WHERE id= $id";	
	$delete = mysql_query($del) or die ('Erro ao deletar');	
	echo "</br><h2>Registro deletado com sucesso!</h2>";
	
	mysql_close($conexao);	
?>
</div>

</body>
</html>

