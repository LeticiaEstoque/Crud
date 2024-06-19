<!DOCTYPE html>
<?php include "config/conexao.php"?>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/864a97e503.js" crossorigin="anonymous"></script>
        <style type="text/css">

            #tamanhoContainer{
                width: 500px;
            }

        </style>

    </head>
    <body>
    
    <div class="container" style="margin-top: 40px;">
        <h3>Lista de Produtos</h3>
        <br/>

<div class="alert alert-warming alert-dismissible fade show" role="alert">
  <strong>Série deletada com sucesso!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

        <a href="index.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
    
            <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">Nome da série</th>
                <th scope="col">Número de temporadas</th>
                <th scope="col">Gênero</th>
                <th scope="col">Assistir</th>
                <th scope="col">Ano de lançamento</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                $sql = "SELECT * FROM `series`";
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)){
                  $id = $array['id'];
                  $nome = $array['nome'];
                  $temporadas = $array['temporadas'];
                  $genero = $array['genero'];
                  $assistir = $array['assistir'];
                  $ano = $array['ano'];

              


                ?>

                <tr>
                <td><?php echo $nome; ?></td>
                <td><?php echo $temporadas; ?></td>
                <td><?php echo $genero; ?></td>
                <td><?php echo $assistir; ?></td>
                <td><?php echo $ano; ?></td>
                

                
                <td>
                    <a class="btn btn-warning btn-sm" href="editar_series.php?id=<?php echo $id ?>" role="button"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Editar</a>
                    <a class="btn btn-primary btn-sm" href="visualizar-unico.php" role="button"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;Visualizar</a>
                    <a class="btn btn-outline-danger btn-sm" href="recursos/_deletar_serie.php?id=<?php echo $id ?>" role="button"><i class="fa-regular fa-trash-can"></i>&nbsp;Excluir</a>
                </td>
                <?php } ?>
              </tr>
    
              </tr>
            </tbody>
          </table>

    </div>
    
    
    </body>
</html>