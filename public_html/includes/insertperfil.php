<?php
include ("conexao.php");

//Variavéis Auxiliares
$nome = $_POST["nome"];
$email = $_POST["email"];
$cpf_cnpj = $_POST["cpf_cnpj"];
$senha = $_POST["senha"];
$contato = $_POST["contato"];
$endereco = $_POST["endereco"];
$cidade = $_POST["cidades"];
$banco = $_POST["banco"];
$agencia = $_POST["agencia"];
$conta = $_POST["conta"];


try {
	$sql = "INSERT INTO pessoa('Nome', 'Email', 'CPF_CNPJ', 'Senha', 'IdCidade', 'Endereco', 'Contato', 'Banco', 'Agencia', 'Conta') VALUES (:Nome, :Email,:CPF_CNPJ,:Senha, :IdCidade:,:Endereco,:Contato,:Banco,:Agencia,:Conta)";
	$stmt = $pdo->prepare($sql);
	
	$stmt->bindParam(':Nome', $nome, PDO::PARAM_STR);
	$stmt->bindParam(':Email', $email, PDO::PARAM_STR);
	$stmt->bindParam(':CPF_CNPJ', $cpf_cnpj, PDO::PARAM_INT);	
	$stmt->bindParam(':Senha', $senha, PDO::PARAM_STR);
	$stmt->bindParam(':Endereco', $senha, PDO::PARAM_STR);
	$stmt->bindParam(':Contato', $contato, PDO::PARAM_INT);
	$stmt->bindParam(':IdCidade', $cidade, PDO::PARAM_INT);
	$stmt->bindParam(':Banco', $banco, PDO::PARAM_STR);
	$stmt->bindParam(':Agencia', $agencia, PDO::PARAM_STR);
	$stmt->bindParam(':Conta', $conta, PDO::PARAM_STR);

	$newID = $pdo->lastInsertId();
		
	$stmt->execute();

	
}catch(PDOException $e){
	print "ERRO: ".$e->getMessage();
	die();
}

?>