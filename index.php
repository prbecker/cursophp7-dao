<?php 

	require_once("config.php");

	//carrega um usuário
	//$root = new Usuario();
	//$root -> loadById(3);
	//echo $root;

	//carrega uma lista de usuários
	//$lista = Usuario::getList();
	//echo json_encode($lista);

	//carrega uma lista de usuários buscando pelo login
	//$search = Usuario::search("jo");
	//echo json_encode($search);

	//carrega um usuário usando o login e a senha
	//$usuario = new Usuario();
	//$usuario->login("root", "!@#$");
	//echo $usuario;

	//criando um novo usuario
	//$aluno = new Usuario("aluno", "@lun0");
	//$aluno->insert();
	//echo $aluno;

	$usuario = new Usuario();
	$usuario->loadById(19);
	$usuario->update("professor", "!@#$%&*");
	echo $usuario;
?>