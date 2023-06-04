<?php  require('../../conexao.php');
//require('salvar_aluguel.php');
//require('excluir_aluguel.php');

session_start();

	if (!isset($_SESSION['nome_login'])) {	
	    
	    session_destroy();
	 
	    unset ($_SESSION['nome_login']);
	    unset ($_SESSION['tipo_login']);

		echo "<script> alert ('ERRO: É NECESSÁRIO FAZER LOGIN');</script>";
		
		echo "<script> window.location.href='http://localhost/plataforma';</script>";

	}	

    if ($_SESSION['tipo_login'] = 0) {

            echo "<script> alert('ERRO: VOCÊ NÃO TEM PERMISSÃO PARA ACESSAR ESTA PÁGINA!');</script>";					
            session_destroy();
        
            unset ($_SESSION['nome_completo_login']);
            unset ($_SESSION['nome_login']);
            unset ($_SESSION['tipo_login']);

            unset ($_SESSION['url']);
            unset ($_SESSION['url_admin']);
            unset ($_SESSION['url_cliente']);

            echo "<script> window.location.href='http://localhost/plataforma';</script>";
    }	

        
$sql = mysqli_query($conexao, "SELECT * FROM carro WHERE descricao_carro = 'DISPONÍVEL'");
				
	
if (mysqli_num_rows($sql) > 0) {
			
    $dados_carro = mysqli_fetch_assoc($sql);
			
} else {
			
	echo "<script> alert ('NÃO EXISTEM CARROS DISPONÍVEIS!');</script>";
				
	echo "<script> window.location.href='$url_cliente';</script>";
			
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma correr</title>
<style>
body{
    background-color: #3a3a3a;
    color: #fff;
    font-family: century gothic, sans-serif;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  
}

td, th {
  border-bottom: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  border-radius: 7px;
  
}

th{
    border: 1px solid #dddddd;
    color: #ADD8E6;
}

tr:nth-child(even) {
    background-image: linear-gradient(to right, #3f0000, #a10000);;
}

.botao_acao{
    width: 20px;
    height: 20px;
    align-items: center;
}
</style>
</head>
<body>

    <h2>ALUGUEL (Carros disponíveis)</h2>

    <table>
    <tr>
        <th>MARCA</th>
        <th>MODELO</th>
        <th>ANO</th>
        <th>DESCRIÇÃO</th>
        <th style="color: #7FFFD4">Alugar</th>
    </tr>
    <?php do{


    ?>

    <tr>
    <td><?php echo $dados_carro['marca_carro'];?></td>
    <td><?php echo $dados_carro['modelo_carro'];?></td>
    <td><?php echo $dados_carro['ano_carro'];?></td>
    <td><?php echo $dados_carro['descricao_carro'];?></td>
    <td>
    
        <a href="aluguel.php?codigo_carro=<?php echo $dados_carro['codigo_carro'];?>">
            <img src="../../img/alugar.png" class="botao_acao" title="Editar">
        </a>
    </td>
    
    </tr>


    <?php }while ($dados_carro = mysqli_fetch_assoc($sql));?>
  
    </table>

    <a href="../../cliente"> <button value="">VOLTAR PARA HOME</button></a>

</body>
</html>