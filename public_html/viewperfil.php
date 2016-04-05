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
  <h3 class="page-header">Visualizar Item #1</h3>
  
  <div class="row">
    <div class="col-md-12">
      <p><strong>Descri&ccedil;&atilde;o</strong></p>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce suscipit purus vel neque malesuada, in eleifend est euismod. Praesent lacinia mi ante, vel vestibulum dolor porta quis. In nec turpis fringilla, scelerisque felis ut, fringilla purus. In hac habitasse platea dictumst. Proin sed cursus nisi. Proin blandit leo non dolor hendrerit ullamcorper. Proin mauris quam, aliquam a viverra eu, placerat vitae eros. Mauris laoreet maximus justo, et accumsan nulla ornare id. Aenean faucibus erat lorem, a semper turpis posuere non. Etiam tellus metus, congue euismod sagittis vitae, euismod ut felis. Donec et ipsum lorem. Suspendisse nec dictum risus. Ut leo dui, finibus nec nulla non, facilisis efficitur eros.</p>
        
       <p>Quisque nec mauris leo. Etiam in tellus at risus sodales semper ac at lacus. Curabitur eget justo ex. Proin dictum augue sit amet viverra porttitor. Vestibulum tempor quam quam, et dictum neque vulputate eu. Suspendisse non commodo urna. In quis lacus vel orci laoreet ornare quis vulputate lectus. Aliquam ante massa, porta at lectus quis, sollicitudin sodales augue. Mauris consectetur justo eu sapien rhoncus mollis.</p>
        
        <p>Mauris interdum in dui eu laoreet. Aliquam eu porta eros. Nunc id fermentum augue. Donec mattis ipsum id luctus porta. Quisque at erat sed ligula egestas maximus. Aliquam dapibus sapien nec nulla pretium dictum. Pellentesque sit amet erat nec nisi venenatis dapibus eget sit amet risus. Nunc aliquet tellus ac scelerisque vestibulum. Curabitur a metus pharetra libero facilisis accumsan sit amet quis diam.</p>
    </div>
	
	<div class="col-md-4">
      <p><strong>Categoria</strong></p>
  	  <p>Lorem ipsum dolor</p>
    </div>
	
	<div class="col-md-4">
      <p><strong>Pre&ccedil;o Unit&aacute;rio</strong></p>
  	  <p>R$ 9,99</p>
    </div>

    <div class="col-md-4">
      <p><strong>Quantidade</strong></p>
  	  <p>In vel sollicitudin leo, id fermentum augue.</p>
    </div>
	
 </div>
 
 <hr />
 <div id="actions" class="row">
   <div class="col-md-12">
     <a href="index.html" class="btn btn-primary">Fechar</a>
	 <a href="edit.html" class="btn btn-default">Editar</a>
	 <a href="#" class="btn btn-default" data-toggle="modal" data-target="#delete-modal">Excluir</a>
   </div>
 </div>
 
</body>
</html>