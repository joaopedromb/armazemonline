<?php

try{
	$pdo = new PDO("mysql:host=mysql.hostinger.com.br;dbname=u339549262_armaz", "u339549262_armaz", "ureJuG");
	print "Conexão Estabelecida";
}catch(PDOExeception $e){
	print "Erro: ".$e->getMessage()."</br>";
}
?>