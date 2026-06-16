<?php namespace Projeto\TI23T; //Nome do Projeto
    //Acessando arquivos...
    require_once('php/funcoes.php'); //Acessando o arquivo...
    use Projeto\TI23T\php\Funcao; //Acessando a classe que está no arquivo funcoes.php...

    //Variável de Conexão
    //Conectando a Index e Funcao
    $funcao = new Funcao();//Construtor da classe funcao
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Tornando o site responsivo... -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Página Inicial</title>
</head>
<body>
    <!-- Formulário -->
    <!-- Fazendo ajustes no design da tela -->
    <form method="POST" style="text-align:center;margin:10%;background-color:#343434;padding:5%;"> 
        <h1>Calculadora</h1> <!-- Título -->   
        
        <!-- Formulário de Informações -->
        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe o primeiro número:</label>
            <input type="number" class="form-control" id="primeiroNumero" name = "primeiroNumero">
        </div>

        <div class="mb-3">
            <label for="lSegundoNumero" class="form-label">Informe o segundo número:</label>
            <input type="number" class="form-control" id="segundoNumero" name = "segundoNumero">
        </div>

        <div class="mb-3">
            <label for="lResultado" class="form-label">Example textarea</label>
            <textarea class="form-control" id="resultado" name = resultado rows="3"></textarea>
        </div>
        <!-- Fim do Formulário de Informações -->

        <!-- Botões -->
        <button type="submit" class="btn btn-primary">Somar
            <?php
                //Coletando os números e armazenando nas variáveis
                $num1 = $_POST['primeiroNumero'];
                $num2 = $_POST['segundoNumero'];

                //Chamando a variável que representa a classe Funcao
                $funcao->coletar($num1, $num2);
                $funcao->somar();

                echo $num1." ".$num2;
                //PAREI AQUI
            ?>
        </button>
        <button type="button" class="btn btn-primary">Subtrair</button>
        <button type="button" class="btn btn-primary">Multiplicar</button>
        <button type="button" class="btn btn-primary">Dividir</button>
        <!-- Fim dos Botões -->

    </form>
    
</body>
</html>