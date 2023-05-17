<?php require('../topo_admin.php');

	require('../../conexao.php');


	$sql = mysqli_query($conexao, "SELECT * FROM carro ORDER BY codigo_carro DESC");
				
	
		if (mysqli_num_rows($sql) > 0) {
			
			$dados_carro = mysqli_fetch_assoc($sql);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM CARROS CADASTRADOS!');</script>";
				
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
	align-items: center;s
	border: 1px solid #069;
	padding: 5rem;
	border-radius: 8px;
}

.agrupamento_botao_acao{
	
	display:flex;
	flex-direction: colum;
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

			<div><h1 style="color: black;">CARROS CADASTRADOS</h1></div>

				<table>
					
					<tr class="tabela_cabecalho">

						<td>CÓDIGO</td>
						<td>MARCA</td>
						<td>MODELO</td>
						<td>ANO</td>
						<td>DESCRIÇÃO</td>
						<td colspan="2">Ação</td>

					</tr>



				<?php do{


					?>
					
					<tr>

						<td><?php echo $dados_carro['codigo_carro'];?></td>
						<td><?php echo $dados_carro['marca_carro'];?></td>
						<td><?php echo $dados_carro['modelo_carro'];?></td>
						<td><?php echo $dados_carro['ano_carro'];?></td>
						<td><?php echo $dados_carro['descricao_carro'];?></td>
						<td>

							<a href="editar.php?codigo_carro=<?php echo $dados_carro['codigo_carro'];?>">
								<img src="../../img/editar.png" class="botao_acao" title="Editar">
							</a>
						</td>

						<td>

							<a href="javascript:func()" onclick="confirmar_exclusao('<?php echo $dados_carro['codigo_carro'];?>')">
								<img src="../../img/excluir.png" class="botao_acao" title="Excluir">
							</a>
						</td>
						
					</tr>


				<?php }while ($dados_carro = mysqli_fetch_assoc($sql));?>

				</table>
				
		</div>
</body>

</html>