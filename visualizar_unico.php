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
            <h4>Modelo</h4>
            
                <?php

                $sql = "SELECT * FROM `cadastrar_motos` WHERE id = $id";
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)){
                    $id = $array['id'];
                    $modelo = $array['modelo'];
                    $cilindrada = $array['cilindrada'];
                    $marca = $array['marca'];
                    $cor = $array['cor'];
                    $ano = $array['ano'];

                ?>

                Modelo: <?php echo $modelo; ?> <br/>
                Cilindrada: <?php echo $cilindrada; ?> <br/>
                Marca: <?php echo $marca; ?> <br/>
                Cor: <?php echo $cor; ?> <br/>
                Ano: <?php echo $ano; ?>
                
                <div style="text-align: right;">
                <a href="visualizar_modelo.php" role="button" class="btn btn-Secondary btn-sm">Voltar</a>
                </div>
                <?php } ?>
        </div>  
    </body>
</html>