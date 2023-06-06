<?php //session_start();

	$servidor = "sql9.freemysqlhosting.net";
	$usuario = "sql9624102";
	$senha = "Ztvk8LUqDm";
	$db_name = "sql9624102";
	
	$conexao = mysqli_connect($servidor, $usuario, $senha, $db_name) or die('Banco de dados indisponível.');
	
	date_default_timezone_set("America/Manaus");
	
	$host_ip = $_SERVER['HTTP_HOST'];
	
	$url = "https://projeto-dev-web-1pcc.onrender.com/plataforma";

	$url_admin = "https://projeto-dev-web-1pcc.onrender.com/plataforma/admin";

	$url_cliente = "https://projeto-dev-web-1pcc.onrender.com/2plataforma/cliente";

?>
