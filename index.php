<?php

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

$LucinoMatos = new Usuario();

$LucinoMatos->loadbyId(9);

echo $LucinoMatos;


?>