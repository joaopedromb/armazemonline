<!DOCTYPE html>
<html lang="en">
<head>
  <title>Armaz&eacute;mWeb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <script src="plugins/jquery/jquery-1.12.2.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Armaz&eacute;mWeb</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active">
        	<a href="#">
  		  		<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                &nbsp;Home
            </a>
       </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
            &nbsp;Cadastro
        	<span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Categoria Produtos</a></li>
          <li><a href="cadprodutos.php">Produtos</a></li> 
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        	<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
            &nbsp;Relat&oacute;rios
        	<span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Categoria Produtos</a></li>
          <li><a href="rlprodutos.php">Produtos</a></li> 
        </ul>
      </li>
      <li><a href="#">Page 3</a></li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right"> 
      <li> <a href="#">Seja Bem-Vindo, </a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
        &nbsp;<kbd>Administrador</kbd>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li>
          	  <a href="#">
		          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
          		  &nbsp;Perfil
              </a>
          </li>
          <li>
          	<a href="#">
		          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
          		  &nbsp;Alterar Senha
            </a>
          </li>
          <li role="separator" class="divider"></li>
          <li>
          	<a href="rlperfil.php">
		          <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
          		  &nbsp;Gerenciar Usuários
            </a>
          </li>
          <li>
          	<a href="login.php">
	            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            	&nbsp;Sair
            </a>
          </li>          
        </ul>
      </li>
    </ul><!-- navbar-rigth -->
  </div> <!-- Container -->
</nav><!-- navbar -->

 <div id="main" class="container-fluid" style="margin-top: 50px">
 
 	<div id="top" class="row">
		<div class="col-sm-3">
			<h2>Itens</h2>
		</div>
		<div class="col-sm-6">
			
			<div class="input-group h2">
				<input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
				<span class="input-group-btn">
					<button class="btn btn-primary" type="submit">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
			
		</div>
		<div class="col-sm-3">
			<a href="add.html" class="btn btn-primary pull-right h2">Novo Item</a>
		</div>
	</div> <!-- /#top -->

 	<hr />
 	<div class="row">
	
	<div class="table-responsive col-md-12">
		<table class="table table-striped" cellspacing="0" cellpadding="0">
			<thead>
				<tr>            
					<th>ID</th>
					<th>Categoria</th>
					<th>Nome do Produto</th>
					<th>Descrição</th>
                    <th>Preço ($)</th>
					<th>Quantidade</th>
					<th>Proprietario</th>                                                                                                                                        
					<th class="actions">Ações</th>                    
				</tr>
			</thead>
            <tbody>
                    
        	<?php
				include ("includes/conexao.php");
				$sql=$pdo->prepare("SELECT * FROM produto WHERE 1 ORDER BY Id ASC");
				$sql->execute();
				$dados=$sql->fetchAll(PDO::FETCH_ASSOC);
				
				foreach($dados as $linha){
					echo"
							<tr>
								<td>".$linha['Id']."</td>
								<td>".$linha['IdCategoria']."</td>
								<td>".$linha['Nome']."</td>
								<td style='width: 600px;'>".$linha['Descricao']."</td>
								<td>".$linha['Preco']."</td>										
								<td>".$linha['Quantidade']."</td>
								<td>".$linha['IdPessoa']."</td>																																																	
								<td class='actions'>
									<a class='btn btn-success btn-xs' href='#'>Visualizar</a>
									<a class='btn btn-warning btn-xs' href='#'>Editar</a>
									<a class='btn btn-danger btn-xs'  href='#' data-toggle='modal' data-target='#delete-modal'>Excluir</a>
								</td>
							</tr>";
				}
		   ?>
           	</tbody>
		</table>
	</div>
	
	</div> <!-- /#list -->
	
	<div id="bottom" class="row">
		<div class="col-md-12">
			<ul class="pagination">
				<li class="disabled"><a>&lt; Anterior</a></li>
				<li class="disabled"><a>1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
			</ul><!-- /.pagination -->
		</div>
	</div> <!-- /#bottom -->
 </div> <!-- /#main -->

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este item?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Sim</button>
	<button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>