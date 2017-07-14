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
<h2>
<?php

	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];
	
	switch ($usuario){
	case "atendente": 
	if ($senha == 123)
		header("location:http://localhost/dontoWeb/dontoWebTelaAtend.html ");
		else
			echo "Senha inválida!";
	break;
	case "CD": 
	if ($senha == 123)
		header ("location:http://localhost/dontoWeb/dontoWebCD.html ");
		else
			echo "Senha inválida!";
	break;
	default: echo "Usuário não existe!";
	}
		
?>