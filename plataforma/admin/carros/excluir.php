<?php require('../topo_admin.php');

	require('../../conexao.php');


	$codigo_carro = $_GET['codigo_carro'];

	//DELETANDO O  CARRO NO BANCO DE DADOS 
	$delete_carro = "DELETE FROM carro WHERE codigo_carro = $codigo_carro";
	
		//VERIFICANDO SE O CARROS FOI  DELETADO	
		if (mysqli_query($conexao,$delete_carro)) {

				mysqli_close($conexao);

				echo "<script> alert ('CARRO EXCLUÍDO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/carros/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL EXCLUIR.');</script>";

				echo "<script> window.location.href='$url_admin/carros';</script>";
				
				mysqli_close($conexao);
			}
	

?>