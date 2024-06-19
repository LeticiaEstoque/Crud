<?php

include '../config/conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `series` WHERE id = $id";
$deletar = mysqli_query($conexao, $sql);

header ('Location: ../serie_deletada.php');
exit;

?>