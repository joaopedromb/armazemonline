<!DOCTYPE html>
<html lang="en">
<head>
  <title>Armaz&eacute;mWeb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <script src="plugins/jquery/jquery-1.12.2.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
  
  <script type="text/javascript">
	$(document).ready(function(){
			$('#estados').change(function(){
				$('#cidades').load('includes/carrega_cidades.php?estado='+$('#estados').val());
			});
	});
  </script>
  
  <script type="text/javascript">
  	function CopiarValor(from, to){
		document.getElementById(to).value = document.getElementById(from).value;
	}
  </script>
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

<div class="container-fluid">
	<h3 class="page-header">Adicionar Item</h3>
    <form action="includes/insertperfil.php" method="post">
		
        <div class="row">
            <div class="form-group col-md-4">
                <div class="input-group">
                     <span class="input-group-addon"><strong>Nome Completo</strong></span>
                     <input type="text" class="form-control" name="nome" placeholder="Digite seu nome" min="3" required autofocus>
                </div>
            </div>
                
            <div class="form-group col-md-4">
                <div class="input-group">
                    <span class="input-group-addon"><strong>E-mail</strong></span>
                    <input type="email" class="form-control" id="email-principal" name="email" onblur="CopiarValor('email-principal','email-copiado')" placeholder="examplo@exemplo.com" required>
                </div>
            </div>
            
            <div class="form-group col-md-4">
                <div class="input-group">
                  <span class="input-group-addon"><strong>CPF/CNPJ</strong></span>
                  <input type="text" class="form-control" name="cpf_cnpj" placeholder="123456789" pattern="[0-9]+$" required>
                </div>
            </div>
    
            <div class="form-group col-md-12">
                <div class="input-group">
                  <span class="input-group-addon"><strong>Endereço</strong></span>
                    <input type="text" class="form-control" name="endereco" placeholder="Rua Example, 000" required/>
                </div>
            </div>
            
            <div class="form-group col-md-4">
                <div class="input-group">
                  <span class="input-group-addon"><strong>Estado</strong></span>
                  <select class="form-control" name="estados" id="estados" required> 
                      <option value="Selecione..."> Selecione...</option>

                      <?php
                    	include ("includes/conexao.php");
                        $sql=$pdo->prepare("SELECT * FROM estados WHERE 1 ORDER BY uf ASC");
                        $sql->execute();
                        $dados=$sql->fetchAll(PDO::FETCH_ASSOC);
                        
                        foreach($dados as $linha){
                            echo "<option value='".$linha['id']."'>".$linha['nome']."</option>";
                        }
                    
                       ?>
                       
                  </select>
                </div>
            </div>
                      
            <div class="form-group col-md-4">
              <div class="input-group">
                <span class="input-group-addon"><strong>Cidade</strong></span>
                <select class="form-control" name="cidades" id="cidades"> 
                  <option> Escolha um Estado ...</option>
                </select>
              </div>
            </div>
            
            <div class="form-group col-md-12">
                <div class="input-group">
                  <span class="input-group-addon"><strong>Contato</strong></span>
                  <input type="text" class="form-control" name="contato" placeholder="55349999999" pattern="[0-9]+$" />
                </div>
            </div>
            
       </div> <!-- div-row -->
       <hr>
       
       <div class="row">
       
          <div class="form-group col-md-4">
            <div class="input-group">
              <span class="input-group-addon"><strong>Banco</strong></span>
              <input type="text" name="banco" class="form-control" placeholder="Itaú" min="4" pattern="[a-z\s]+$">
            </div>
		 </div>
            
         <div class="form-group col-md-4">
           <div class="input-group">
             <span class="input-group-addon"><strong>Agência</strong></span>
             <input type="text" name="agencia" class="form-control" placeholder="0000" maxlength="7" pattern="[0-9]+$">
           </div>
         </div>
            
        <div class="form-group col-md-4">
           <div class="input-group">
            <span class="input-group-addon"><strong>Conta</strong></span>
            <input type="text" class="form-control" name="conta" placeholder="5644521-2" pattern="[0-9]+$" maxlength="15">
           </div>
        </div>
                      
       </div><!-- div-row-->
    <hr>

    <div class="row">
      <div class="form-group col-md-4">
          <div class="input-group">
            <span class="input-group-addon"><strong>Email</strong></span>
            <input type="email" id="email-copiado" class="form-control" placeholder="@exemplo.com" disabled>
          </div>
      </div>
            
	  <div class="form-group col-md-4">
		  <div class="input-group">
		     <span class="input-group-addon"><strong>Senha</strong></span>
		     <input type="password" class="form-control" name="senha" placeholder="*******" maxlength="6">
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