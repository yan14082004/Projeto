<?php session_start();

	if (!isset($_SESSION['nome_login'])) {	
	    
	    session_destroy();
	 
	    unset ($_SESSION['nome_login']);
	    unset ($_SESSION['tipo_login']);

		echo "<script> alert ('ERRO: É NECESSÁRIO FAZER LOGIN');</script>";
		
		echo "<script> window.location.href='http://localhost/plataforma';</script>";

	}	

	if ($_SESSION['tipo_login'] <> 1) {

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
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma correr</title>

    <link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['url']."/css/menuCliente.css";?>">
</head>
<body>
    <div class="caixa_maior">
        <div class="topo">
            <div class="title_plataform"><h1>correr.com</h1></div> 
			<nav class="nav-container">
				<!--LINKS-->
				<ul id="nav-links">
					<li><a href="<?php echo $_SESSION['url']."/cliente/alugar/alugar.php";?>" class="links" id="link2">aluguel</a></li>
					<li><a href="<?php echo $_SESSION['url']."/sair.php";?>" class="links" id="link4">sair</a></li>
				</ul>
			</nav>
			<div class="nome_completo_login" ><label><?php echo "Olá! ".$_SESSION['nome_completo_login'];?></label></div>
        </div>

		<div class="pulicidade">
			<div class="slider">
				<div class="slides">
					<!--radio buttons-->
					<input type="radio" name="radio-btn" id="radio1">
					<input type="radio" name="radio-btn" id="radio2">
					<input type="radio" name="radio-btn" id="radio3">
					<input type="radio" name="radio-btn" id="radio4">
					<!--fim radio buttons-->

					<!--slide images-->
					<div class="slide first">
						<img src="https://quatrorodas.abril.com.br/wp-content/uploads/2022/11/NOVO-VW-POLO-TRACK-2023-1.jpg?quality=70&strip=info&w=1280&h=720&crop=1" alt="imagem 1">
					</div>
					<div class="slide">
						<img src="https://mundodoautomovelparapcd.com.br/wp-content/uploads/2022/09/Volkswagen-Polo-2023-02-1280x720.jpg" alt="imagem 2">
					</div>
					<div class="slide">
						<img src="https://t.ctcdn.com.br/FjhBbtHPEx-oYQk2RUl72Ba3bUw=/1400x788/smart/i680496.jpeg" alt="imagem 3">
					</div>
					<div class="slide">
						<img src="https://quatrorodas.abril.com.br/wp-content/uploads/2023/03/Volkswagen-Polo-Track-2023-2-e1679591920791.jpg?quality=70&strip=info" alt="imagem 4">
					</div>
					<!--fim slide images-->

					<!--navigation auto-->
					<div class="navigation-auto">
						<div class="auto-btn1"></div>
						<div class="auto-btn2"></div>
						<div class="auto-btn3"></div>
						<div class="auto-btn4"></div>
					</div>
				</div>

				<div class="manual-navigation">
					<label for="radio1" class="manual-btn"></label>
					<label for="radio2" class="manual-btn"></label>
					<label for="radio3" class="manual-btn"></label>
					<label for="radio4" class="manual-btn"></label>
				</div>


			</div>

			<script src="script.js"></script>
		</div>

    </div>

</body>
</html>