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
    <title>Converter Temperatura em Celsius para Fahrenheit</title>
</head>
<body>

    <!-- Formulário de Informações-->
    <!-- Fazendo ajustes no design da tela -->
    <form method="POST" style="text-align:center;margin:10%;background-color:#ffb5ff;padding:5%;"> 
        
        <!-- Título -->
        <h1>Converter Temperatura em Celsius para Fahrenheit</h1>    
        
        <!-- Aba de Informações -->
        <!-- TextArea da Temperatura -->
        <div class="mb-3">
            <label for="lTemperatura" class="form-label">Informe a temperatura em Celsius (C°):</label>
            <input type="text" class="form-control" id="temperatura" name = "temperatura">
        </div>

        <!-- Fim da Aba de Informações -->

        <!-- Botão -->
        <!-- Botão de Conversão de Temperatura em Celsius para Fahrenheit -->
        <button type="submit" class="btn btn-primary">Converter
            <?php
                
                //Verificando se o campofoi preenchido com número...
                if(isset($_POST['temperatura'])){
                    $celsius = (float)$_POST['temperatura'];

                    //Coletando os números e armazenando nas variáveis
                    //Executando o cálculo...
                    $resultado = $funcao->converterCelsius($celsius);

                }//Fim da Verificação
            ?>
        </button>
        <!-- Fim do Botão de Conversão de Temperatura em Celsius para Fahrenheit -->

        <!-- Exibição do resultado -->
        <h2>
            <?php
            
                //Verificando se o campo foi preenchido
                if(isset($_POST['temperatura'])){
                    
                    //Executando o método...
                    echo $resultado;
                    
                }else{

                    //Se não tiver sido preenchido...
                    echo "Por favor, preencha todos os campos!";

                }//Fim da Verificação
            ?>
        </h2>
        <!-- FIm da Exibição do resultado -->

    </form>
    <!-- Fim do Formulário de Informações-->
     
</body>
</html>