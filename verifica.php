<!DOCTYPE html>
<html>
<head>
	<title>Comprovar Login</title>
</head>
<body>
<?php

try
{

	// as variáveis login e senha recebem os dados digitados na página anterior
	
	//Conexão mysql------------------------
	include("conecta.php");


	//Comando SQL de verificaçãoo de autenticação
	$sql = "SELECT * FROM usuario
	WHERE (login = :NOME or email = :NOME) 
	AND senha = :PASSWORD";

	$resultado = $pdo->prepare($sql);

	$nome = preg_replace('/[^[:alnum:]_]/', '', $_POST['login']);//nome de usuario ou senha
	$p = preg_replace('/[^[:alnum:]_]/', '', $_POST['senha']); //alnum só aceita letras e números, impede SQL injection
	$password = hash('sha3-512' , $p); //senha com criptografia SHA3 para não ver no BD

	$resultado->bindValue(":NOME", $nome);
	$resultado->bindValue(":PASSWORD", $password);

	$resultado->execute();

	$numero_registro=$resultado->rowCount();




	//Caso consiga logar cria a sessão
	if($numero_registro!=0)
	{
		echo "<h1>GOOOOOOOOOOOOOOOO conectado com sucesso</h1>";

		// session_start inicia a sessão
		session_start();
	

		$r = $resultado->fetch(PDO::FETCH_OBJ);//fetch para poder pegar apenas uma linha
		$user = $r->login;
		$_SESSION["usuario"] = $_POST["login"];
		//$_SESSION['senha'] = $passoword;
		
		/*header('Location: consulta_prod.php');*/
		echo "<script> window.location = 'consulta_prod.php'; </script> ";
		


	}

	//Caso contrário redireciona para a página de autenticação
	else {
	

		//Redireciona para a página de autenticação
	/*	header("location: index.php?error=Invalid");*/
		echo "<script> window.location = 'index.php?error=invalid';</script>";
		//usuário ou senha incorretos

	}

} catch(Exception $e)
{
   die("Error:" . $e->getMessage());
}	

?>

</BODY>
</HTML>