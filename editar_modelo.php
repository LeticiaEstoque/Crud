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
            <h4>Editar informações</h4>

            <div class="alert alert-sucess alert-dismissible fade show" role="alert">
                <strong>Modelo cadastrado com sucesso!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            
            <form action="recursos/bc_editar_modelo.php" method="post" style="margin-top: 20px;">
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

                <div class="mb-3">
                <label>Identificação
                </label>
                <input type="text" name="id" value= "<?php echo $id; ?>" class="form-control">
                </div>

                <div class="mb-3">
                <label>Modelo
                </label>
                <input type="text" name="modelo" value= "<?php echo $modelo; ?>" class="form-control" autocomplete="off" placeholder="Insira o nome" required>
                </div>

                <div class="mb-3">
                <label>Cilindrada</label>
                <input type="number" name="cilindrada" value= "<?php echo $cilindrada; ?>" class="form-control" autocomplete="off" placeholder="Insira a Quantidade" required>
                </div>

                <div class="mb-3">
                <label>Marca</label>
                <select name= "marca" class="form-select" required>
                    <option selected value= "<?php echo $marca; ?>"> <?php echo $marca; ?></option>
                    <option value="Kawasaki">Kawasaki</option>
                    <option value="Ducati">Ducati</option>
                    <option value="Honda">Honda</option>
                    <option value="Susuki">Susuki</option>
                    <option value="KTM">KTM</option>
                    <option value="Yamaha">Yamaha</option>
                    <option value="BMW">BMW</option>
                    <option value="Kasinsky">Kasinsky</option>
                    <option value="Harley Davidson">Harley Davidson</option>
                    <option value="Aprilia">Aprilia</option>
                  </select>
                </div>

                <div class="mb-3">
                <label>Cor
                </label>
                <input type="text" name="cor" value= "<?php echo $cor; ?>" class="form-control" autocomplete="off" placeholder="Insira a cor" required>
                </div>

                <div class="mb-3">
                <label>Ano
                </label>
                <input type="number" name="ano" value= "<?php echo $ano; ?>" class="form-control" autocomplete="off" placeholder="Insira o ano" required>
                </div>
                
                <div style="text-align: right;">
                <a href="visualizar_modelo.php" role="button" class="btn btn-Secondary btn-sm">Voltar</a>
                <button type="submit" class="btn btn-warming btn-sm">Editar</button>
                </div>
                <?php } ?>
            </form>
        </div>  
    </body>
</html>