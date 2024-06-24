<?php

include '../config/conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `cadastrar_motos` WHERE id = $id";
$deletar = mysqli_query($conexao, $sql);

header ('Location: ../modelo_deletada.php');
exit;

?>