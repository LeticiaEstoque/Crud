<?php

include "config/conexao.php";

$id = $_GET['id'];

?>

<html lang "pt-BR">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        <style type="text/css">

            #tamanhoContainer{
                width: 500px;
            }

        </style>

    </head>
    <body>
        <div class="container" id="tamanhoContainer" style="margin-top: 40px;">
            <h4>Série</h4>
            
                <?php

                $sql = "SELECT * FROM `series` WHERE id = $id";
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)){
                    $id = $array['id'];
                    $nome = $array['nome'];
                    $temporadas = $array['temporadas'];
                    $genero = $array['genero'];
                    $assistir = $array['assistir'];
                    $ano = $array['ano'];

                ?>

                Nome: <?php echo $nome; ?> <br/>
                Temporadas: <?php echo $temporadas; ?> <br/>
                Gênero: <?php echo $genero; ?> <br/>
                Assistir: <?php echo $assistir; ?> <br/>
                Ano: <?php echo $ano; ?>
                
                <div style="text-align: right;">
                <a href="visualizar_series.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
                </div>
                <?php } ?>
        </div>  
    </body>
</html>