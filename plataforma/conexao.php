<?php //session_start();

	$servidor = "sql9.freemysqlhosting.net";
	$usuario = "sql9624102";
	$senha = "Ztvk8LUqDm";
	$db_name = "sql9624102";
	
	$conexao = mysqli_connect($servidor, $usuario, $senha, $db_name) or die('Banco de dados indisponível.');
	
	date_default_timezone_set("America/Manaus");
	
	$host_ip = $_SERVER['HTTP_HOST'];
	
	$url = "http://".$host_ip."/plataforma";

	$url_admin = "http://".$host_ip."/plataforma/admin";

	$url_cliente = "http://".$host_ip."/plataforma/cliente";

?>
