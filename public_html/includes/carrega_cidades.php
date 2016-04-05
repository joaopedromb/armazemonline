<?php
    include("conexao.php");
	
    $idestado = $_GET['estado'];
			
	if($idestado == "Selecione..."){
		echo "<option value='0'>Escolha um Estado</option>";
	}else{		
			
		$sql=$pdo->prepare("SELECT * FROM cidades WHERE estado = ".$idestado." ORDER BY uf ASC");
		$sql->execute();
		$dados=$sql->fetchAll(PDO::FETCH_ASSOC);
		
		foreach($dados as $linha){
			echo "<option name='cidades' value='".$linha['id']."'>".$linha['nome']."</option>";
		}
	
	}
?>