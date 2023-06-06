<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Plataforma Correr</title>

	<!-- ARQUIVO DE ESTILOS DA PLATAFORMA -->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	
</head>

<body>


		<form id="login" name="login" class="login" method="post" action="valida_login.php">

				<div class="agrupamento">

					<div class="caixa" ><img src="img/logo.png" alt=""></div>

					<div class="form">

						<div><h1>Login</h1></div>

						<div><label>Digite seu login</label></div>	

						<div><input type="text" id="nome_login" name="nome_login" required autofocus placeholder="Login" style="color: #5d5d5d"></div>

						<div><label>Digite sua senha</label></div>

						<div><input type="password" id="senha_login" name="senha_login" required placeholder="senha" style="color: #5d5d5d"></div>

						<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Entrar"></div>

						<div style="padding-left: 5rem;">Não tem conta? <a href="cadastro.php" style="color: white">Criar uma conta</a></div>

					</div>
				</div>
			</form>		
</body>

</html>