<?php session_start();

	if (!isset($_SESSION['nome_login'])) {	
	    
	    session_destroy();
	 
	    unset ($_SESSION['nome_login']);
	    unset ($_SESSION['tipo_login']);

		echo "<script> alert ('ERRO: É NECESSÁRIO FAZER LOGIN');</script>";
		
		echo "<script> window.location.href='http://localhost/plataforma';</script>";

	}	

	if ($_SESSION['tipo_login'] <> 0) {

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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Plataforma correr</title>

	<!-- ARQUIVO DE ESTILOS DO PORTAL -->
	<link rel="stylesheet" type="text/css" href="../../css/menuAdmin.css">

	<script>

		function confirmar_exclusao(codigo_carro) {
		     
		     var resposta = confirm("Tem certeza que deseja excluir?");
		     
		     if (resposta == true) {
		     
		          window.location.href = "excluir.php?codigo_carro="+codigo_carro;
		     }
		}

        function confirmar_exclusao_aluguel(codigo_aluguel) {
		     
		     var resposta = confirm("Tem certeza que deseja excluir?");
		     
		     if (resposta == true) {
		     
		          window.location.href = "excluir_aluguel.php?codigo_aluguel="+codigo_aluguel;
		     }
		}

    </script>
	
	
  
</head>


<body>

		<div class="caixa_maior">

		<div class="caixa_sup">

			<div><h1 style="padding-left: 5rem">correr.com</h1></div>
			<div style="float: right; font-size: 1.5rem; padding-right: 2rem" ><label><?php echo "Olá! ". $_SESSION['nome_completo_login'];?></label></div>
		</div>

        </div>
    
        <div class="menu">
            <div class="navegacao">
                <ul> 
                    <li class="list">
                        <a href="<?php echo $_SESSION['url_admin']."/carros";?>">
                            <span class="icon"><ion-icon name="car-sport-outline"></ion-icon></span>
                            <span class="title">Cadastrar carro</span>
                        </a>
                    </li>
                    </li>
                    <li class="list">
                        <a href="<?php echo $_SESSION['url_admin']."/carros/exibir.php";?>">
                            <span class="icon"><ion-icon name="create-outline"></ion-icon></span>
                            <span class="title">Consultar carros</span>
                        </a>
                    </li>
                    <li class="list"class="list">
                        <a href="<?php echo $_SESSION['url_admin']."/cad_admin.php";?>">
                            <span class="icon"><ion-icon name="person-add-outline"></ion-icon></span>
                            <span class="title">Cadastrar admin.</span>
                        </a>
                    </li>
					<li class="list"class="list">
                        <a href="<?php echo $_SESSION['url_admin']."/carros/exibir_aluguel.php";?>">
                            <span class="icon"><ion-icon name="create-outline"></ion-icon></span>
                            <span class="title">consultar aluguel</span>
                        </a>
                    </li>
                    <li class="list"class="list">
                        <a href="<?php echo $_SESSION['url']."/sair.php";?>">
                            <span class="icon"><ion-icon name="log-out-outline"></ion-icon></ion-icon></span>
                            <span class="title">Sair</span>
                        </a>
                    </li>
                </ul>
            </div>
		</div>

	</div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
