<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Atualizar</title>

	<!-- ARQUIVO DE ESTILOS DA PLATAFORMA -->
	<link rel="stylesheet" type="text/css" href="atualizar.css">
	
</head>

<body>
		<form id="login" name="login" class="login" method="post" action="valida_login.php">

				<div class="agrupamento">

					<div><h1>Atualizar</h1></div>

					<div><label>Digite seu novo login</label></div>	

					<div><input type="text" id="nome_login" name="nome_login" required autofocus placeholder=" Novo Login" style="color: #5d5d5d"></div>

					<div><label>Digite sua nova senha</label></div>

                    <div><input type="password" id="senha_login" name="senha_login" required placeholder="Nova senha" style="color: #5d5d5d"></div>

					<div><input type="submit" id="btn_entrar" name="btn_entrar" value="salvar"></div>

				</div>
			</form>		
</body>

</html>