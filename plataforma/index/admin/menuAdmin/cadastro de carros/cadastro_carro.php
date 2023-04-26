<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro de carros</title>

	<!-- ARQUIVO DE ESTILOS DA PLATAFORMA -->
	<link rel="stylesheet" type="text/css" href="cadastro_carro.css">
	
</head>

<body>
		<form id="login" name="login" class="login" method="post" action="valida_login.php">

				<div class="agrupamento">

					<div><h1>Cadastro do carro</h1></div>

					<div><label>marca</label></div>	

					<div><input type="text" id="nome_login" name="nome_login" required autofocus placeholder="digite a marca..." style="color: #5d5d5d"></div>

                    <div><label>modelo</label></div>	

					<div><input type="text" id="nome_login" name="nome_login" required autofocus placeholder="digite o modelo..." style="color: #5d5d5d"></div>

                    <div><label>descrição</label></div>	

					<div><input type="text" id="nome_login" name="nome_login" required autofocus placeholder="defina a descrição..." style="color: #5d5d5d"></div>

					<div><label>ano</label></div>	

					<div><input type="number" id="nome_login" name="nome_login" required autofocus placeholder="ano de fabricação..." style="color: #5d5d5d"></div>

					<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Entrar"></div>

				</div>
			</form>		
</body>

</html>