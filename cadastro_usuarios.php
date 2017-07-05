<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Sistema Caçambas</title>
		
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
        <!-- Cabeçalho -->
        <nav class="nav navbar-inverse navbar-static-top" >
            <div class="container-fluid">    
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="home.php">Home</a></li>
                        <li >
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastro</a>
                            <ul id="cadastro" class="dropdown-menu">
                                <li><a href="cadastro_usuarios.php">Usuários</a></li>
                                <li><a href="#">Clientes</a></li>
                                <li><a href="#">Caçambas</a></li>
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
        <!-- formulario -->
        
        <div class="panel-body col-sm-6 " sstyle="border: 1px solid blue">
            
            <div class="container-fluid " sstyle="border: 1px solid red">
                <div class="col-sm-12">
                    <form class="form-horizontal" sstyle="border: 1px solid black">
                        <div sstyle="border: 1px solid green">
                        <h3>Cadastro de Usuários</h3>
                            <div class="form-group" >
                                <label class="col-sm-2" >Nome:</label>
                                <input type="text" class="col-sm-8">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2">Usuário:</label>
                            <input type="text" class="col-sm-4">
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2">Senha:</label>
                            <input type="password" class="col-sm-4">
                        </div>
                        <div>
                            <button type="button" class="btn btn default">Localizar</button>
                            <button type="button" class="btn btn default">Incluir</button>
                            <button type="button" class="btn btn default" disabled="disabled">Cancelar</button>
                            <button type="button" class="btn btn default" disabled="disabled">Gravar</button>
                            <button type="button" class="btn btn default">Alterar</button>
                            <button type="button" class="btn btn default">Excluir</button>
                            <button type="button" class="btn btn default">Sair</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
            
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>