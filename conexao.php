<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "dontoWeb";
$conexao = mysql_connect($host , $user, $pass) or die(mysql_error()) ;
mysql_select_db($banco, $conexao) or die(mysql_error());

?>