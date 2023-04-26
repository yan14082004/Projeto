<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>consultar</title>

	<!-- ARQUIVO DE ESTILOS DA PLATAFORMA -->
	<link rel="stylesheet" type="text/css" href="consultar.css">
	
</head>

<body>
		<form id="login" name="login" class="login" method="post" action="valida_login.php">

			<div class="agrupamento">

				<div><h1>Consultar Dados</h1></div>

				<div><label>Digite o nome ou código</label></div>	

				<div><input type="text" id="nome_login" name="nome_login" required autofocus placeholder="buscar..." style="color: #5d5d5d"></div>

				<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Buscar"></div>

			</div>
		</form>	
</body>

</html>