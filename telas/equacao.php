<?php namespace Projeto\TI23T\telas; //Nome do Projeto
    
    //Conectando...
    include('cabecalho.php'); //Utilizando a mesma formatação para cabeçalho
    require_once('../php/funcoes.php'); //Acessando o arquivo de funções...
    use Projeto\TI23T\php\Funcao; //Acessando a classe que está no arquivo funcoes.php...

    //Variável de Conexão
    $funcao = new Funcao();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equação de Segundo Grau</title>
</head>
<body>

    <!-- Formulário de Informações da Equação do Segundo Grau -->
    <form method="POST" style="text-align:center;margin:10%;background-color:#ffb5ff;padding:5%;"> 

        <!-- Título -->
        <h1>Equação do Segundo Grau</h1>

        <!-- Formulário de Informações -->
        <!-- TextArea do Primeiro Número (Letra A) -->
        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe o primeiro valor da equação:</label>
            <input type="number" class="form-control" id="primeiroNumero" name = "primeiroNumero">
        </div>

        <!-- TextArea do Segundo Número (Letra B) -->
        <div class="mb-3">
            <label for="lSegundoNumero" class="form-label">Informe o segundo valor da equação:</label>
            <input type="number" class="form-control" id="segundoNumero" name = "segundoNumero">
        </div>

        <!-- TextArea do Terceiro Número (Letra C) -->
        <div class="mb-3">
            <label for="lTerceiroNumero" class="form-label">Informe o terceiro valor da equação:</label>
            <input type="number" class="form-control" id="terceiroNumero" name = "terceiroNumero">
        </div>

        <!-- Botões -->
        <!-- Botão de Equação do Segundo Grau -->
        <button type="submit" class="btn btn-primary">Realizar a equação
            <?php
                
                //Verificando se todos os campos foram preenchidos com números
                if(isset($_POST['primeiroNumero']) || isset($_POST['segundoNumero']) || isset($_POST['terceiroNumero'])){
                    $a = $_POST['primeiroNumero'];
                    $b = $_POST['segundoNumero'];
                    $c = $_POST['terceiroNumero'];

                    //Coletando os números e armazenando nas variáveis
                    $funcao->coletarValor($a, $b, $c);

                }//Fim da Verificação

            ?>
        </button>
        <!-- Fim do Botão Equação do Segundo Grau -->

        <!-- Exibição do resultado -->
        <h2>
            <?php
            
                //Verificando se os campos estão preenchidos
                if(isset($_POST['primeiroNumero']) || isset($_POST['segundoNumero']) || isset($_POST['terceiroNumero'])){
                    
                    //Executando o método...
                    echo $funcao->bhaskara();
                    
                }else{

                    //Se não estiverem preenchidos...
                    echo "Por favor, Preencha os campos!";
                }//Fim da Verificação
                
            ?>
        </h2>
        <!-- Fim da Exibição do resultado-->
        
    </form>
    <!-- Fim do Formulário -->
     
</body>
</html>