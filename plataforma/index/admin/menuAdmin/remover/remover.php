<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Remover</title>

	<!-- ARQUIVO DE ESTILOS DA PLATAFORMA -->
	<link rel="stylesheet" type="text/css" href="remover.css">
	
</head>

<body>
		<form id="login" name="login" class="login" method="post" action="valida_login.php">

				<div class="agrupamento">

					<div><h1>Remover</h1></div>

					<div><label>Digite código ou nome </label></div>	

					<div><input type="text" id="nome_login" name="nome_login" required autofocus placeholder="código/nome que deseja remover" style="color: #5d5d5d"></div>

					<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Remover"></div>

				</div>
			</form>		
</body>

</html>