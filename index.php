<?php

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);


//carrega um usuário
//$LucinoMatos = new Usuario();

//$LucinoMatos->loadbyId(9);
//echo $LucinoMatos;


//carrega uma lista de usuários
//$lista = Usuario::getList();

//echo json_encode($lista);

//Carrega uama lista de usuários buscando pelo login;

//$search = Usuario::search("jo");

//echo json_encode($search);


//Carrega um usuário usando login e a senha;

$usuario = new Usuario();
$usuario->login("root", "123456");

echo $usuario;


?>