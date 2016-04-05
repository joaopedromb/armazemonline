<?php
include ("conexao.php");

//Variavéis Auxiliares
extract($_POST);

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$pessoa = 1;

try {
	$sql = "INSERT INTO pessoa('Id', 'Descricao', 'Preco', 'Quantidade', 'IdCategoria', 'IdPessoa', 'Nome') VALUES (:Id,:Descricao,:Preco,:Quantidade,:IdCategoria,:IdPessoa,:Nome)";
	$stmt = $pdo->prepare($sql);
	
	$stmt->bindParam(':Nome', $nome, PDO::PARAM_STR);
	$stmt->bindParam(':Descricao', $descricao, PDO::PARAM_STR);
	$stmt->bindParam(':IdCategoria', $categoria, PDO::PARAM_INT);	
	$stmt->bindParam(':Preco', $preco, PDO::PARAM_INT);
	$stmt->bindParam(':Quantidade', $quantidade, PDO::PARAM_INT);
	$stmt->bindParam(':IdPessoa', $pessoa, PDO::PARAM_INT);
	$stmt->execute();
	
}catch(PDOException $e){
	print "ERRO: ".$e->getMessage();
	die();
}

?>