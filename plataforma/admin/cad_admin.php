<?php 

	require('topo_admin.php');

	require('../conexao.php');
	
	if (isset($_POST['nome_login'])){

		$nome_administrador = $_POST['nome_administrador'];

		$nome_login = $_POST['nome_login'];

		$nome_completo_login = 'administrador';

		$senha_login = md5($_POST['senha_login']);

		$tipo_login = 0;

		$insert_cliente = "INSERT INTO administrador (nome_administrador)
		VALUES ('".$nome_administrador."')";
		
		$insert_login = "INSERT INTO login (nome_login, nome_completo_login, senha_login, tipo_login) 
		VALUES ('".$nome_login."','".$nome_completo_login."','".$senha_login."','".$tipo_login."')";		
	
		if (mysqli_query($conexao, $insert_cliente)) {

			#mysqli_close($conexao);

			echo "<script> alert ('ADMINISTRADOR CADASTRADO COM SUCESSO!');</script>";

			echo "<script> window.location.href='$url_admin';</script>";
					
		} else {
				
			echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

			echo "<script> window.location.href='$url_admin';</script>";
					
			mysqli_close($conexao);
		}

		if (mysqli_query($conexao, $insert_login)) {

			mysqli_close($conexao);

			echo "<script> alert ('ADMINISTRADOR CADASTRADO COM SUCESSO!');</script>";

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
	<title>Cadastro de Administrador</title>

	<style type="text/css">
		*{
			margin: 0;
			padding:  0;
			font-family: century gothic, sans-serif;
		}

		html{
			font-size: 62.5%;
		}


		.login{

			width: 450px; /*tamanho da caixa de cadastro*/
			margin: 2rem 50rem;	

		}

		.agrupamento{
			flex-direction: row;
			justify-content: space-between;
			border: 1px solid #3f0000;
			border-radius: 8px;
			box-shadow: 0px 1px 10px #3f0000;
			height: 520px;
		    margin: auto;
		}


		label, input[type="text"], input[type="password"], input[type="submit"]{

			font-size: 1.5rem;
			padding-top: 5rem;
			color: #5d5d5d;
		    padding-left: 65px;
		}

		input[type="text"], input[type="password"]{

			width: 300px;
			padding: 1.0rem;
			margin-top: 1.2rem;
			margin-bottom: 1.2rem;
			border: 1px solid #CCC;
			border-radius: 8px;
			margin-left: 65px;

		}

		input[type="submit"]{

			color: white;
			width: 325px;
			padding: 1.0rem;
			margin-top: 1.2rem;
			margin-bottom: 1.2rem;
			border-radius: 8px;
			background-image: linear-gradient(to right, #a10000, #3f0000);
			border: 0;
			border: 1px solid white;
			border-radius: 8px;
			cursor: pointer;
			margin-left: 65px;
		    


		}

		#btn_entrar:hover 

		{ background-color: #000000; 

		transition: 0.3s;

		opacity: 0.5;

		}
	</style>
	
</head>

<body>
		<form id="login" name="login" class="login" method="post" action="cad_admin.php">

				<div class="agrupamento">

					<div><h1 style="color: #5e5e5e; padding-left: 10px;">Cadastro de Administradores</h1></div>

					<div><label>Digite o nome</label></div>	

					<div><input type="text" id="nome_login" name="nome_administrador" required autofocus placeholder="nome" style="color: #5d5d5d"></div>

					<div><label>Digite o login</label></div>	

					<div><input type="text" id="nome_login" name="nome_login" required autofocus placeholder="login" style="color: #5d5d5d"></div>

					<div><label>Digite a senha</label></div>

                    <div><input type="password" id="senha_login" name="senha_login" required placeholder="senha" style="color: #5d5d5d"></div>

					<div><input type="submit" id="btn_entrar" name="btn_entrar" value="salvar"></div>

				</div>
			</form>		
</body>

</html>