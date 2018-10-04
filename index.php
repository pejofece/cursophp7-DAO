<?php

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//outro exemplo..

//carrega um usuario....
//$user = new Usuario();
//$user->loadbyId(2);
//echo $user;


//outro exemplo

//carrega um lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//outro exemplo

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("us");
//echo json_encode($search);

//outro exemplo

//carrega usuario usando o login e senha
$usuario = new Usuario();
$usuario->login("user", "12345");

echo $usuario;

?>