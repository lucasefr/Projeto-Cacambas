<?php
    
?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Sistema Caçambas Bacana</title>
        <link rel="icon" type="text/css" href="imagens/favicon.png">
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link href="estilo.css" rel="stylesheet">
        
                <style>
                    body{
                        background: grey;
                    }
                </style>
	</head>

	<body>
            
       
            
        <nav class="nav navbar-inverse navbar-static-top" ">
            <div class="container-fluid">    
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="home.php">Home</a></li>
                        <li >
                            <a class="dropdown-toggle" data-toggle="dropdown" href="modal.php">Cadastro</a>
                            <ul id="cadastro" class="dropdown-menu">
                                <li><a href="cadastro_usuarios.php">Usuários</a></li>
                                <li><a href="#">Clientes</a></li>
                                <li><a href="#modalCacambas" data-toggle="modal">Caçambas</a></li>
                                <li><a href="#">Caixa</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Documento</a>
                            <ul id="cadastro" class="dropdown-menu">
                                <li><a href="#">Pedidos de Locação</a></li>                                
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Gerenciamento</a>
                            <ul id="cadastro" class="dropdown-menu">
                                <li><a href="#">Caçambas</a></li>
                                <li><a href="#">Pedidos de Locação</a></li>

                            </ul>
                        </li>
                                                
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="#"><span class="glyphicon glyphicon-log-out" style="color: red"></span>Logout</a>
                        </li>    
                    </ul>   

                    
                </div>
            </div>    
        </nav>
            
        <!--Modal Cadastro Caçambas-->
        <div class="modal fade modal-total" id="modalCacambas" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">x</button>
                        <h4 class="modal-title">Cadastro de Caçambas</h4>
                    </div>
                    <div class="modal-body" style="border: 1px solid red; height:50px; ">
                        <span class="col-sm-4"> Numero da Caçamba:</span>
                        <input type="text" class="col-sm-1">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn default">Localizar</button>
                        <button type="button" class="btn btn default">Incluir</button>
                        <button type="button" class="btn btn default" disabled="disabled">Cancelar</button>
                        <button type="button" class="btn btn default" disabled="disabled">Gravar</button>
                        <button type="button" class="btn btn default">Alterar</button>
                        <button type="button" class="btn btn default">Excluir</button>
                        <button type="button" class="btn btn-default"  data-dismiss="modal">Sair</button>
                    </div>
                </div>
            </div>
            
        </div>    
	    

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>