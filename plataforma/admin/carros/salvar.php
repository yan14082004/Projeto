<?php require('../../conexao.php');

	
	//VERIFICANDO DADOS PARA ATUALIZAR
	if (isset($_POST['codigo_carro'])) {

		$codigo_carro = $_POST['codigo_carro'];      
	
		$marca_carro = $_POST['marca_carro'];

		$modelo_carro = $_POST['modelo_carro'];

		$ano_carro = $_POST['ano_carro'];

		$descricao_carro = $_POST['descrição_carro'];

		//ATUALIZAR OS DADOS DO CARRO
		$update_carro = "UPDATE carro SET marca_carro = '".$marca_carro."', modelo_carro = '".$modelo_carro."', ano_carro = '".$ano_carro."', descricao_carro = '".$descricao_carro."' WHERE codigo_carro = $codigo_carro";
	
		//VERIFICANDO SE A ATUZALIZAÇÃO  FOI FEITA
		if (mysqli_query($conexao,$update_carro)) {

				mysqli_close($conexao);

				echo "<script> alert ('CARRO ATUALIZADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/carros/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL ATUALIZAR.');</script>";

				echo "<script> window.location.href='$url_admin/carros';</script>";
				
				mysqli_close($conexao);
			}

	}else if (isset($_POST['marca_carro'])) {      
	
		$marca_carro = $_POST['marca_carro'];

		$modelo_carro = $_POST['modelo_carro'];

		$descricao_carro = $_POST['descricao_carro'];

		$ano_carro = $_POST['ano_carro'];


		$insert_carro = "INSERT INTO carro (marca_carro, modelo_carro, descricao_carro, ano_carro) VALUES ('".$marca_carro."','".$modelo_carro."','".$descricao_carro."','".$ano_carro."')";		
	
		if (mysqli_query($conexao,$insert_carro)) {

				mysqli_close($conexao);

				echo "<script> alert ('CARRO CADASTRADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/carros/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

				echo "<script> window.location.href='$url_admin/carros';</script>";
				
				mysqli_close($conexao);
			}



	} 
	

?>