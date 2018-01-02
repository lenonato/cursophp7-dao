<?php 

require_once("config.php");

//CARREGA UM USUARIO
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;


//Carrega uma lista de usuarios.
/*$lista = Usuario::getList();

echo json_encode($lista);*/

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");

//echo json_encode($search);


//Carrega um usuario usando o login e a senha

//$usuario = new Usuario();
//$usuario->login("nonato", "momo");
//echo $usuario;

$aluno = new Usuario();

$aluno->setDeslogin("aluno");
$aluno->setDessenha("@lun0");

$aluno->insert();

echo $aluno;


/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

 ?>