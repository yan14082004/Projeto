<?php require('conexao.php');
	
	if (isset($_POST['nome_login'])){

		$nome_cliente = $_POST['nome_cliente'];

		$nome_login = $_POST['nome_login'];

		$nome_completo_login = $_POST['nome_cliente'];

		$senha_login = md5($_POST['senha_login']);

		$tipo_login = 1;

		$insert_cliente = "INSERT INTO cliente (nome_cliente)
		VALUES ('".$nome_cliente."')";
		
		$insert_login = "INSERT INTO login (nome_login, nome_completo_login, senha_login, tipo_login) 
		VALUES ('".$nome_login."','".$nome_completo_login."','".$senha_login."','".$tipo_login."')";		
	
		if (mysqli_query($conexao, $insert_cliente)) {

			#mysqli_close($conexao);

			echo "<script> alert ('CADASTRADO COM SUCESSO!');</script>";

			echo "<script> window.location.href='$url';</script>";
					
		} else {
				
			echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

			echo "<script> window.location.href='$url';</script>";
					
			mysqli_close($conexao);
		}

		if (mysqli_query($conexao, $insert_login)) {

			mysqli_close($conexao);

			echo "<script> alert ('CADASTRADO COM SUCESSO!');</script>";

			echo "<script> window.location.href='$url';</script>";
					
		} else {
				
			echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

			echo "<script> window.location.href='$url';</script>";
					
			mysqli_close($conexao);
		}
	}
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro</title>

	<!-- ARQUIVO DE ESTILOS DA PLATAFORMA -->
	<link rel="stylesheet" type="text/css" href="css/cadastro.css">
	
</head>

<body>
		<form id="login" name="login" class="login" method="post" action="cadastro.php">

				<div class="agrupamento">

					<div><h1>Cadastro</h1></div>

					<div><label>Digite seu nome</label></div>	

					<div><input type="text" id="nome_login" name="nome_cliente" required autofocus placeholder="nome" style="color: #5d5d5d"></div>

					<div><label>Digite seu login</label></div>	

					<div><input type="text" id="nome_login" name="nome_login" required autofocus placeholder="login" style="color: #5d5d5d"></div>

					<div><label>Digite sua senha</label></div>

                    <div><input type="password" id="senha_login" name="senha_login" required placeholder="senha" style="color: #5d5d5d"></div>

					<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Entrar"></div>

				</div>
			</form>		
</body>

</html>