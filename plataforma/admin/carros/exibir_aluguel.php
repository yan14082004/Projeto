<?php require('../topo_admin.php');

	require('../../conexao.php');


	$alugueis = mysqli_query($conexao, "SELECT * FROM aluguel ORDER BY codigo_aluguel DESC");
				
	
		if (mysqli_num_rows($alugueis) > 0) {
			
			$dados_aluguel = mysqli_fetch_assoc($alugueis);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM ALUGUEIS NO MOMENTO.');</script>";
				
			echo "<script> window.location.href='$url_admin/carros';</script>";
			
			
		}
	

?>

<style type="text/css">

.estila_tabela{

	width: 1000px;
	margin: 4rem auto;

}

.estila_tabela > div > h1{

	font-size: 2rem;

}

table{

	width: 100%;

}

.tabela_cabecalho{

	font-weight: 600;
	height: 5rem;
}

td{

	font-size: 1.4rem;
	border-bottom: 1px solid #069;
	text-align: center;
	

	
}

.agrupamento_curso{

	display:flex;
	flex-direction: column;
	/*justify-content: left;*/
	align-items: left;
	
	border: 1px solid #069;
	padding: 5rem;
	border-radius: 8px;


}

.agrupamento_exibir_curso{
	
	display:flex;
	flex-direction: row;
	justify-content: space-between;	
	align-items: center;
	border: 1px solid #069;
	padding: 5rem;
	border-radius: 8px;
}

.agrupamento_botao_acao{
	
	display:flex;
	flex-direction: column;
	justify-content: space-between;	
	align-items: center;
}

.botao_acao{
	
	width: 35px;
	cursor:pointer;
	margin-top: 0.2rem;
	margin-bottom: 0.2rem;
	

}






</style>



		<div class="estila_tabela">

			<div><h1 style="color: black;">ALUGUEIS EFETUADOS</h1></div>

				<table>
					
					<tr class="tabela_cabecalho">

						<td>CÓDIGO ALUGUEL</td>
						<td>DESCRIÇÃO</td>
						<td>CÓDIGO DO CARRO</td>
						<td>CÓDIGO DO CLIENTE</td>
						<td>EXCLUIR</td>

					</tr>

				<?php do{


					?>
					
					<tr>

						<td><?php echo $dados_aluguel['codigo_aluguel'];?></td>
						<td><?php echo $dados_aluguel['descricao'];?></td>
						<td><?php echo $dados_aluguel['codigoCarro'];?></td>
						<td><?php echo $dados_aluguel['codigoCliente'];?></td>

						<td>

							<a href="javascript:func()" onclick="confirmar_exclusao_aluguel('<?php echo $dados_aluguel['codigo_aluguel'];?>')">
								<img src="../../img/excluir.png" class="botao_acao" title="Excluir">
							</a>
						</td>
						
					</tr>


				<?php }while ($dados_aluguel = mysqli_fetch_assoc($alugueis));?>

				</table>
				
		</div>
</body>

</html>