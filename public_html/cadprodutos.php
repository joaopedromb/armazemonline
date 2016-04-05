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

<div id="main" class="container-fluid">
	<h3 class="page-header">Adicionar Item</h3>
    <form action="includes/insertproduto.php" method="post">
		<div class="row">

			<div class="form-group col-md-4">
                <div class="input-group">
                  <span class="input-group-addon"><strong>Nome do Produto*</strong></span>
                  <input type="text" name="nome" class="form-control" placeholder="Pen Drive Kingston, Midia Removivel, etc">
                </div>
			</div>
                    
			<div class="form-group col-md-12">
				<label for="campo1">Descri&ccedil;&atilde;o</label>
				<textarea type="text" class="form-control" name="descricao" style="height:200px;"></textarea>
			</div>

			<div class="form-group col-md-4">
                <div class="input-group">
                  <span class="input-group-addon"><strong>Categoria</strong></span>
	              <select class="form-control" name="categoria">
                  	  <option> Selecione uma Categoria... </option>
                      <?php
                    	include ("includes/conexao.php");
                        $sql=$pdo->prepare("SELECT * FROM categoria WHERE 1 ORDER BY Descricao ASC");
                        $sql->execute();
                        $dados=$sql->fetchAll(PDO::FETCH_ASSOC);
                        
                        foreach($dados as $linha){
                            echo "<option name='categoria' value='".$linha['id']."'>".$linha['Descricao']."</option>";
                        }
                    
                       ?>                                   	
                  </select>
                </div>
			</div>
            
			<div class="form-group col-md-4">
                <div class="input-group">
                  <span class="input-group-addon"><strong>Pre&ccedil;o Unit&aacute;rio</strong></span>
                  <input type="text" class="form-control" name="preco" aria-label="0,00" pattern="[-+]?[0-9]*[.,]?[0-9]+" placeholder="9999.99">
                </div>
			</div>

			<div class="form-group col-md-4">
                <div class="input-group">
                  <span class="input-group-addon"><strong>Quantidade</strong></span>
                  <input type="number" name="quantidade" class="form-control"/>
                </div>
			</div>
                       
        </div>
		<hr>
        <div id="actions" class="row">
        	<div class="col-md-12">
        		<button type="submit" class="btn btn-primary">Salvar</button>
        		<a href="index.html" class="btn btn-default">Cancelar</a>
        	</div>
        </div>
	</form>
</div>
</body>
</html>
