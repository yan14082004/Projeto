<?php require('../../conexao.php');
	require('../topo_admin.php');
    

    $codigo_aluguel = $_GET['codigo_aluguel'];

	//DELETANDO O  ALUGUEL NO BANCO DE DADOS 
	$delete_aluguel = "DELETE FROM aluguel WHERE codigo_aluguel = $codigo_aluguel";
	
		if (mysqli_query($conexao, $delete_aluguel)) {

				mysqli_close($conexao);

				echo "<script> alert ('ALUGUEL EXCLUÍDO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/carros/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL EXCLUIR.');</script>";

				echo "<script> window.location.href='$url_admin/carros';</script>";
				
				mysqli_close($conexao);
			}
?>

