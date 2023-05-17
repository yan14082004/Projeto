<?php require('../topo_admin.php');?>
	
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

input[type="text"], input[type="number"]{

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


	<form style="margin-left: 40%" id="form_curso" name="form_curso" method="post" action="salvar.php" class="form_curso">

			<div ><h1 style="color: black">Cadastrar carro</h1></div>

				<div class="agrupamento_curso">

						<div>
							<div><label>marca</label></div>	

							<div><input type="text" id="nome_login" name="marca_carro" required autofocus placeholder="digite a marca..." style="color: #5d5d5d"></div>

		                    <div><label>modelo</label></div>	

							<div><input type="text" id="nome_login" name="modelo_carro" required autofocus placeholder="digite o modelo..." style="color: #5d5d5d"></div>

		                    <div><label>descrição</label></div>	

							<div><input type="text" id="nome_login" name="descricao_carro" required autofocus placeholder="defina a descrição..." style="color: #5d5d5d"></div>

							<div><label>ano</label></div>	

							<div><input type="number" id="nome_login" name="ano_carro" required autofocus placeholder="ano de fabricação..." style="color: #5d5d5d"></div>


						</div>

						
				</div>

				<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar"></div>

		</form>

</body>

</html>