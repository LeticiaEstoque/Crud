<?php

include '../config/conexao.php';


$id = $_POST['id'];
$modelo = $_POST['modelo'];
$cilindrada = $_POST['cilindrada'];
$marca = $_POST['marca'];
$cor = $_POST['cor'];
$ano = $_POST['ano'];

$sql = "UPDATE `cadastrar_motos` SET `cilindrada`= $cilindrada,`marca`='$marca',`cor`='$cor',`ano`= $ano WHERE id = $id"; 

$atualizar = mysqli_query($conexao, $sql);

header ('Location: bc_modelo_alterado.php');
exit;


?>