<!DOCTYPE html>
<html lang"pt-br">
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>DontoWeb</title>
		<style>
			h2{
				font-family: Arial;
				font-size: 20pt;
			}
		</style>
	</head>
<body>
<div>
<?php include("dontoWebTelaAtend.php"); ?>
<?php include("conexao.php"); ?>
<h2>
<?php

	$nome = (($_POST["nome"])== "")?"Não informado!":$_POST["nome"];
	$ano = $_POST["dataNasc"];
	$idade = date("Y") - $ano;
	$fone = (($_POST["fone"])== "")?"Não informado!":$_POST["fone"];
	$email = (($_POST["email"])== "")?"Não informado!":$_POST["email"];
	$endereco = (($_POST["endereco"])== "")?"Não informado!":$_POST["endereco"];
	$rg = $_POST["rg"];
	$cpf = $_POST["cpf"];

	$sql = "INSERT INTO cadastro_paciente(nome, ano_nasc, email, telefone, rg, cpf, endereco)
	VALUES('$nome', '$ano', '$email', '$fone', '$rg', '$cpf', '$endereco')";
	$ok = mysql_query($sql, $conexao);
	if ($ok)
	{
		echo "usuário cadastrado com sucesso!!!</br>";
	}else{
		echo "usuário não cadastrado!!!</br>";
	}
	
	mysql_close($conexao);
?>
</h2>
</div>
</body>
</html>
	