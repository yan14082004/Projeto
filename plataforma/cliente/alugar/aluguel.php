<?php require('../../conexao.php');
    require('alugar.php'); 


    $codigo_carro = $_GET['codigo_carro'];


	$select_carro = mysqli_query($conexao, "SELECT * FROM carro WHERE codigo_carro = $codigo_carro");
				
	
	if (mysqli_num_rows($select_carro) > 0) {
			
		$dados_carro = mysqli_fetch_assoc($select_carro);
			
	} else {
			
	    echo "<script> alert ('NÃO EXISTEM CARROS CADASTRADOS!');</script>";
				
		echo "<script> window.location.href='$url_admin/carro';</script>";
			
			
	}
    
?>
<head>
    <style> 
.agrupamento{
	flex-direction: row;
	justify-content: space-between;
	border: 1px solid #3f0000;
	border-radius: 8px;
	box-shadow: 0px 1px 10px #3f0000;
	height: 520px;
    margin: auto;
    width: 1000px;
    float: left;
    display: grid;
    
}


label, input[type="text"], input[type="password"], input[type="submit"]{

	font-size: 1.5rem;
	padding-top: 2rem;
	color: #fff;
    padding-left: 100px;
    font-size: 14px;
    float: left
}

input[type="text"], input[type="password"]{

	width: 220px;
	padding: 1.0rem;
	margin-top: 1.2rem;
	margin-bottom: 1.2rem;
	border: 1px solid #CCC;
	border-radius: 8px;
	margin-left: 10px;
    color: #5d5d5d;
}

input[type="submit"]{

	color: white;
	width: 325px;
	padding: 1.0rem;
	margin-top: 2.0rem;
	margin-bottom: 1.2rem;
	border-radius: 8px;
	background-image: linear-gradient(to right, #a10000, #3f0000);
	border: 0;
	border: 1px solid white;
	border-radius: 8px;
	cursor: pointer;
	margin-left: 40%;
    


}

#btn_entrar:hover 

{ background-color: #000000; 

transition: 0.3s;

opacity: 0.5;

}
    </style>
</head>
<body>
    
<form id="form_curso" name="form_curso" method="post" action="salvar_servico.php" class="form_curso">

<div><h1 style="color: #fff; margin-left: 41%;">REALIZAR ALUGUEL</h1></div>

    <div class="agrupamento_curso">

            <div><label>codigo carro:</label></div>	

            <div><input type="text" id="nome_curso" name="codigoCarro" value="<?php echo $dados_carro['codigo_carro'];?>" readonly></div>

            <div><label>codigo cliente:</label></div>	

            <div><input type="text" id="nome_curso" name="codigoCliente" value="<?php echo $_SESSION['codigo_login'];?>" readonly></div>

            <div><label>Descrição:</label></div>	

            <div><input type="text" id="nome_curso" name="descricao" value="Pagamento a definir em nossa loja" readonly></div>

			<div><label>Modelo carro:</label></div>	

            <div><input type="text" id="nome_curso" name="modelo_carro" placeholder="<?php echo $dados_carro['modelo_carro'];?>.." readonly></div>

			<div><label>Marca carro:</label></div>

			<div><input type="text" id="nome_curso" name="marca_carro" placeholder="<?php echo $dados_carro['marca_carro'];?>.." readonly></div>


    </div>

    <div><input type="submit" id="btn_entrar" name="submit" value="Alugar"></div>

</form>


</body>
