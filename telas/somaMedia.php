<?php namespace Projeto\TI23T\telas; //Nome do Projeto
    
    //Conectando...
    include('cabecalho.php'); //Utilizando a mesma formatação para cabeçalho
    require_once('../php/funcoes.php'); //Acessando o arquivo de funções...
    use Projeto\TI23T\php\Funcao; //Acessando a classe que está no arquivo funcoes.php...

    //Variável de Conexão
    $funcao = new Funcao();
    $resultado = 0;
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular a Média de Três Números</title>
</head>
<body>

    <!-- Formulário de Informações-->
    <!-- Fazendo ajustes no design da tela -->
    <form method="POST" style="text-align:center;margin:10%;background-color:#ffb5ff;padding:5%;"> 
        
        <!-- Título -->
        <h1>Calcular a Média de Três Números</h1>    
        
        <!-- Aba de Informações -->
        <!-- TextArea do Primeiro Número -->
        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe o primeiro número:</label>
            <input type="number" class="form-control" id="primeiroNumero" name = "primeiroNumero">
        </div>

        <!-- TextArea do Segundo Número -->
        <div class="mb-3">
            <label for="lSegundoNumero" class="form-label">Informe o segundo número:</label>
            <input type="number" class="form-control" id="segundoNumero" name = "segundoNumero">
        </div>

        <!-- TextArea do Terceiro Número -->
        <div class="mb-3">
            <label for="lTerceiroNumero" class="form-label">Informe o terceiro número:</label>
            <input type="number" class="form-control" id="terceiroNumero" name = "terceiroNumero">
        </div>

        <!-- Fim da Aba de Informações -->

        <!-- Botão -->
        <!-- Botão de Cálculo da Média de Três Números -->
        <button type="submit" class="btn btn-primary">Calcular a média
            <?php
                
                //Verificando se todos os campos foram preenchidos com números
                if(isset($_POST['primeiroNumero']) || isset($_POST['segundoNumero']) || isset($_POST['terceiroNumero'])){
                    $num1 = $_POST['primeiroNumero'];
                    $num2 = $_POST['segundoNumero'];
                    $num3 = $_POST['terceiroNumero'];

                    //Coletando os números e armazenando nas variáveis
                    //Executando o cálculo...
                    $resultado = $funcao->somaMediaNumeros($num1, $num2, $num3);

                }//Fim da Verificação
            ?>
        </button>
        <!-- Fim do Botão de Cálculo da Média de Três Números -->

        <!-- Exibição do resultado -->
        <h2>
            <?php
            
                //Verificando se os campos estão preenchidos
                if(isset($_POST['primeiroNumero']) || isset($_POST['segundoNumero']) || isset($_POST['terceiroNumero'])){
                    
                    //Executando o método...
                    echo $resultado;
                    
                }else{

                    //Se não estiverem preenchidos...
                    echo "Por favor, preencha todos os campos!";

                }//Fim da Verificação
            ?>
        </h2>
        <!-- Fim da Exibição do resultado -->

    </form>
    <!-- Fim do Formulário de Informações-->
     
</body>
</html>