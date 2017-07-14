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
	$id = $_POST["id"];
	$nome = (($_POST["nome"])== "")?"Não informado!":$_POST["nome"];
	$ano = $_POST["dataNasc"];
	$idade = date("Y") - $ano;
	$fone = (($_POST["fone"])== "")?"Não informado!":$_POST["fone"];
	$email = (($_POST["email"])== "")?"Não informado!":$_POST["email"];
	$endereco = (($_POST["endereco"])== "")?"Não informado!":$_POST["endereco"];
	$rg = $_POST["rg"];
	$cpf = $_POST["cpf"];

	$up = ("UPDATE cadastro_paciente SET nome= '$nome', ano_nasc = '$ano', email= '$email', telefone= '$fone', rg= '$rg', cpf= '$cpf', endereco= 'endereco'
	WHERE id= $id");
	$ok = mysql_query($up, $conexao);
	if ($ok)
	{
		echo "usuário atualizado com sucesso!!!</br>";
	}else{
		echo "usuário não atualizado!!!</br>";
	}
	mysql_close($conexao);
	
?>
</h2>
</div>
</body>
</html>