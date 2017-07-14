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
<body Bgcolor = "#456789"/>
<?php include("dontoWebTelaAtend.php");?>

	<form action ="dontoWebInsert.php" method = "post" >
		<center><h1> Cadastro </font> </h1></center>
		
		<fieldset><legend><h2>Dados do paciente</h2></legend>
			<p> Nome:  <input type = "text" name = "nome" size = 65 ></br>
			 Ano de nascimento: <input type = "number" name = "dataNasc" size = 10 value = 1990></br>
			 E-mail: <input type = "text"  name = "email" size = 64></br>
			 Telefone: <input type = "text" name = "fone" size = 30></br>
			 Rg: <input type = "text" name = "rg" size = 30></br>
			 CPF: <input type = "text" name = "cpf" size = 30></br>
			 Endereço: <input type= "text" name = "endereco" size = 60></p>
		</fieldset></br>
		<h2><input type = "submit" value = "Cadastrar"></h2>
	</form>
	
		
</body>
</html>
