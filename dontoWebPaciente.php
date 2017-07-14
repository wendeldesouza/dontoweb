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
<body Bgcolor = "white"	/>
	<?php include("dontoWebTelaAtend.php");?>
	<?php include("conexao.php"); ?>
	<center><h1> Dados do Paciente </font> </h1></center>
	<h2>
	<?php
		$id = $_GET["id"];
		$query = "SELECT * from cadastro_paciente WHERE id= $id" ;
		$result = mysql_query($query);

	while($fetch = mysql_fetch_row($result)){
		echo "<table>
		<tr>
		<td>| Nome</td>
		<td>| Ano Nasc</td>
		<td>| email</td>
		<td>| Fone</td>
		<td>| RG</td>
		<td>| CPF</td>
		<td>| Endereço</td>
		</tr>";
		foreach($fetch as $value){
			echo "<p>";
			echo "<td>| $value </td>";
			echo "</p>";
		}
	}
	
	mysql_close($conexao);

?>
</h2>
</body>
</html>