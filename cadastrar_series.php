<!DOCTYPE html>
<html>
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
            <h4>Formulário de Cadastro</h4>

            <div class="alert alert-sucess alert-dismissible fade show" role="alert">
                <strong>Série cadastrada com sucesso!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            
            <form action="recursos/_inserir_series.php" method="post" style="margin-top: 20px;">
                <div class="mb-3">
                <label>Nome da série
                </label>
                <input type="text" name="nome" class="form-control" autocomplete="off" placeholder="Insira o nome" required>
                </div>

                <div class="mb-3">
                <label>Quantidade de temporadas</label>
                <input type="number" name="temporadas" class="form-control" autocomplete="off" placeholder="Insira a Quantidade" required>
                </div>

                <div class="mb-3">
                <label>Gênero</label>
                <select name= "genero" class="form-select" required>
                    <option selected></option>
                    <option value="Drama">Drama</option>
                    <option value="Comédia">Comédia</option>
                    <option value="Ficcão e Fantasia">Ficção cientifica e fantasia</option>
                    <option value="Terror">Terror</option>
                    <option value="Misterio e Suspense">Mistério e suspense</option>
                    <option value="Épico">Épico</option>
                    <option value="Romance">Romance</option>
                    <option value="Documentário">Documentário</option>
                    <option value="Animacão">Animação</option>
                    <option value="Acão e Aventura">Ação e aventura</option>
                  </select>
                </div>

                <div class="mb-3">
                <label>Assistir</label>
                <select name="assistir" class="form-select" required>
                    <option selected></option>
                    <option value="Netflix">Netflix</option>
                    <option value="Amazon">Amazon Prime</option>
                    <option value="Disney">Disney+</option>
                    <option value="Apple">Apple TV+</option>
                    <option value="Paramount">Paramount+</option>
                    <option value="Discovery">Discovery+</option>
                  </select>
                </div>

                <div class="mb-3">
                <label>Ano de lançamento
                </label>
                <input type="text" name="ano" class="form-control" autocomplete="off" placeholder="Insira o ano" required>
                </div>
                
                <div style="text-align: right;">
                <a href="../index.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
                <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
                </div>
            </form>
        </div>  
    </body>
</html>