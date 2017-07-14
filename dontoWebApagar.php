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
		
		<center><h1> Apagar dados do Paciente </h1></center>
		<form action = "dontoWebDelete.php" method = "get"> 
		
		<fieldset>
			
			 Código do Paciente: <input type = "number" name = "id" >
			
		</fieldset></br></br>
		<h2><input type = "submit" value = "Apagar"></h2>
		
		</form>

</body>
</html>