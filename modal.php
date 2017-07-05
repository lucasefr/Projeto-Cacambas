<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Sistema Caçambas</title>
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
            

        <!--Modal Cadastro Caçambas-->
        <div class="modal fade" id="modalCacambas" role="dialog">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <span>Número da Caçamba</span>
                <input type="text" class="col-sm-4">
            </div>
            <div class="modal-footer" style="position: absolute;">
                <button type="button" class="btn btn default">Localizar</button>
                <button type="button" class="btn btn default">Incluir</button>
                <button type="button" class="btn btn default" disabled="disabled">Cancelar</button>
                <button type="button" class="btn btn default" disabled="disabled">Gravar</button>
                <button type="button" class="btn btn default">Alterar</button>
                <button type="button" class="btn btn default">Excluir</button>
                <button type="button" class="btn btn-default"  data-dismiss="modal">Sair</button>
            </div>
        </div>
	    

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>