<?php namespace Projeto\TI23T; //Nome do Projeto
    //Acessando arquivos...
    include('telas/cabecalho.php');//Tentando utilizar a formatação 
    use Projeto\TI23T\php\Funcao; //Acessando a classe que está no arquivo funcoes.php...
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Tornando o site responsivo... -->
    <title>Página Inicial</title>
</head>
<body>

<!-- Título -->
    <h1>Boas Vindas!</h1>

<!-- Hiperlinks de Redirecionamento-->
    <a href="telas/somar.php" class="btn btn-primary">Somar</a>
    <a href="telas/subtrair.php" class="btn btn-primary">Subtrair</a>
    <a href="telas/multiplicar.php" class="btn btn-primary">Multiplicar</a>
    <a href="telas/dividir.php" class="btn btn-primary">Dividir</a>
    <a href="telas/equacao.php" class="btn btn-primary">Equação de Segundo Grau</a>
    <a href="telas/imc.php" class="btn btn-primary">Classificação do IMC</a>
    <a href="telas/areaRetangulo.php" class="btn btn-primary">Cálculo da Área do Retângulo</a>
    <a href="telas/areaTriangulo.php" class="btn btn-primary">Cálculo da Área do Triângulo</a>
    <a href="telas/precoProdutoImposto.php" class="btn btn-primary">Imposto de 18%</a>
    <a href="telas/conversaoIdadeDias.php" class="btn btn-primary">Conversão de Idades para Dias</a>

<!-- Fim dos Hiperlinks -->
    
</body>
</html>