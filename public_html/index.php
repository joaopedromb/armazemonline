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
  
<div class="container">
	<!-- Conteudo !-->
</div>

</body>
</html>