<?php

include '../config/conexao.php';


$id = $_POST['id'];
$nome = $_POST['nome'];
$temporadas = $_POST['temporadas'];
$genero = $_POST['genero'];
$assistir = $_POST['assistir'];
$ano = $_POST['ano'];

$sql = "UPDATE `series` SET `temporadas`= $temporadas,`genero`='$genero',`assistir`='$assistir',`ano`= $ano WHERE id = $id"; 

$atualizar = mysqli_query($conexao, $sql);

header ('Location: _serie_alterado.php');
exit;


?>