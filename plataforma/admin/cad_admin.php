<?php 

	require('topo_admin.php');

	require('../conexao.php');
	
	if (isset($_POST['nome_login'])){

		$nome_administrador = $_POST['nome_administrador'];

		$nome_login = $_POST['nome_login'];

		$nome_completo_login = 'administrador';

		$senha_login = md5($_POST['senha_login']);

		$tipo_login = 0;

		$insert_admin = "INSERT INTO administrador (nome_administrador)
		VALUES ('".$nome_administrador."')";
		
		$insert_login = "INSERT INTO login (nome_login, nome_completo_login, senha_login, tipo_login) 
		VALUES ('".$nome_login."','".$nome_completo_login."','".$senha_login."','".$tipo_login."')";		
	
		if (mysqli_query($conexao, $insert_admin)) {

			#mysqli_close($conexao);

			echo "<script> alert ('ADMINISTRADOR CADASTRADO COM SUCESSO!');</script>";

			echo "<script> window.location.href='$url_admin/cad_admin.php';</script>";
					
		} else {
				
			echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

			echo "<script> window.location.href='$url_admin/carros/cad_admin.php';</script>";
					
			mysqli_close($conexao);
		}

		if (mysqli_query($conexao, $insert_login)) {

			mysqli_close($conexao);

			echo "<script> alert ('ADMINISTRADOR CADASTRADO COM SUCESSO!');</script>";

			echo "<script> window.location.href='$$url_admin/carros/cad_admin.php';</script>";
					
		} else {
				
			echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

			echo "<script> window.location.href='$$url_admin/carros/cad_admin.php';</script>";
					
			mysqli_close($conexao);
		}
	}
?>
	
	<style type="text/css">
		
		*{
			margin: 0;
			padding:  0;
			font-family: century gothic, sans-serif;
		}

		.login{

			width: 450px; /*tamanho da caixa de cadastro*/
			margin: 7rem auto;	

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
			padding-top: 2rem;
			color: #5d5d5d;
		   
		}

		input[type="text"], input[type="password"]{

			width: 300px;
			padding: 1.0rem;
			margin-top: 1.2rem;
			margin-bottom: 1.2rem;
			border: 1px solid #CCC;
			border-radius: 8px;
			

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

		}

		#btn_entrar:hover 

		{ background-color: #000000; 

		transition: 0.3s;

		opacity: 0.5;

		}
	</style>


	<form style="margin-left: 40%" id="form_curso" name="form_curso" method="post" action="cad_admin.php" class="form_curso">

			<div ><h1 style="color: black">Cadastrar administrador</h1></div>

				<div class="agrupamento_curso">

						<div>
							<div><label>Nome administrador</label></div>	

							<div><input type="text" id="nome_login" name="nome_administrador" required autofocus placeholder="nome..." style="color: #5d5d5d"></div>

		                    <div><label>login administrativo</label></div>	

							<div><input type="text" id="nome_login" name="nome_login" required autofocus placeholder="login..." style="color: #5d5d5d"></div>

		                    <div><label>senha administrativa</label></div>	

							<div><input type="password" id="nome_login" name="senha_login" required autofocus placeholder="senha..." style="color: #5d5d5d"></div>
						</div>

						
				</div>

				<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar"></div>

		</form>

</body>

</html>