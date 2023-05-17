<?php require('../topo_admin.php');

	require('../../conexao.php');


	$codigo_carro = $_GET['codigo_carro'];


	$select_carro = mysqli_query($conexao, "SELECT * FROM carro WHERE codigo_carro = $codigo_carro");
				
	
		if (mysqli_num_rows($select_carro) > 0) {
			
			$dados_carro = mysqli_fetch_assoc($select_carro);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM CARROS CADASTRADOS!');</script>";
				
			echo "<script> window.location.href='$url_admin/carro';</script>";
			
			
		}
	

?>
		<style type="text/css">
			*{
				margin: 0;
				padding:  0;
				font-family: century gothic, sans-serif;
			}


			form{
				margin-left: 35%;
			}
			html{
				font-size: 62.5%;
			}

			.agrupamento{
				flex-direction: row;
				justify-content: space-between;
				border: 1px solid #3f0000;
				border-radius: 8px;
				box-shadow: 0px 1px 10px #3f0000;
				height: 520px;
			    margin-left: 40%;
			}


			label, input[type="text"], input[type="password"], input[type="submit"]{

				font-size: 1.5rem;
				padding-top: 2rem;
				color: #5d5d5d;
			    padding-left: 65px;
			}

			input[type="text"], input[type="number"]{

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

		<form id="form_curso" name="form_curso" method="post" action="salvar.php" class="form_curso">

			<div><h1 style="color: black;">ATUALIZAR CARROS</h1></div>

				<div class="agrupamento_curso">

						<div>
							<div><label>Código</label></div>	

							<div><input type="text" id="codigo_curso" name="codigo_carro" value="<?php echo $dados_carro['codigo_carro'];?>" readonly></div>

						</div>

						<div>
							<div><label>Marca</label></div>	

							<div><input type="text" id="nome_curso" name="marca_carro" value="<?php echo $dados_carro['marca_carro'];?>" required autofocus></div>

							<div><label>Modelo</label></div>	

							<div><input type="text" id="nome_curso" name="modelo_carro" value="<?php echo $dados_carro['modelo_carro'];?>" required autofocus></div>

							<div><label>Ano</label></div>	

							<div><input type="number" id="nome_curso" name="ano_carro" value="<?php echo $dados_carro['ano_carro'];?>" required autofocus></div>

							<div><label>Descrição</label></div>	

							<div><input type="text" id="nome_curso" name="descrição_carro" value="<?php echo $dados_carro['descricao_carro'];?>" required autofocus></div>

						</div>	

				</div>

				<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar"></div>

		</form>

</body>

</html>