<?php

include '../config/conexao.php';

$nome = $_POST['nome'];
$temporadas = $_POST['temporadas'];
$genero = $_POST['genero'];
$assistir = $_POST['assistir'];
$ano = $_POST['ano'];

$sql = "INSERT INTO `series`(`nome`, `temporadas`, `genero`, `assistir`, `ano`) VALUES ('$nome', $temporadas,'$genero','$assistir',$ano)"; 

$inserir = mysqli_query($conexao, $sql);


?>

<html lang "pt-BR">
<head>
<meta charset="utf-8">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        
<title>Primeiro CRUD em php</title>
        

<style type="text/css">

    #tamanhoContainer{
        width: 500px;
    }

</style>

</head>
<body>

<div class="container" id="tamanhoContainer" style="margin-top: 40px;">
<h4>Formulário de Cadastro</h4>
<div class="alert alert-sucess alert-dismissible fade show" role="alert">
  <strong>Série cadastrada com sucesso!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
            
    <form action="_inserir_series.php" method="post" style="margin-top: 20px;">
    <div class="mb-3">
    <label>Nome da série
    </label>
    <input type="text" name="nome" class="form-control" placeholder="Insira o nome">
    </div>

    <div class="mb-3">
    <label>Quantidade de temporadas</label>
    <input type="number" name="temporadas" class="form-control" placeholder="Insira a Quantidade">
    </div>

    <div class="mb-3">
    <label>Gênero</label>
    <select name= "genero" class="form-select">
        <option selected>Selecione o gênero</option>
        <option value="drama">Drama</option>
        <option value="comedia">Comédia</option>
        <option value="ficcaoefantasia">Ficção cientifica e fantasia</option>
        <option value="terror">Terror</option>
        <option value="misterioesuspensa">Mistério e suspense</option>
        <option value="epico">Épico</option>
        <option value="romance">Romance</option>
        <option value="documentario">Documentário</option>
        <option value="animacao">Animação</option>
        <option value="acaoeaventura">Ação e aventura</option>
        </select>
    </div>

    <div class="mb-3">
    <label>Assistir</label>
    <select name="assistir" class="form-select">
        <option selected>Onde assistir</option>
        <option value="netflix">Netflix</option>
        <option value="amazon">Amazon Prime</option>
        <option value="disney">Disney+</option>
        <option value="apple">Apple TV+</option>
        <option value="paramount">Paramount+</option>
        <option value="discovery">Discovery+</option>
        </select>
    </div>

    <div class="mb-3">
    <label>Ano de lançamento
    </label>
    <input type="text" name="ano" class="form-control" placeholder="Insira o ano">
    </div>
                
    <div style="text-align: right;">
    <a href="../index.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
    <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
    </div>

    </form>

</div>
</body>

</html>