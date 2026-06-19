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
    <title>Conversão de Idade para Dias</title>
</head>
<body>

    <!-- Formulário de Informações-->
    <!-- Fazendo ajustes no design da tela -->
    <form method="POST" style="text-align:center;margin:10%;background-color:#ffb5ff;padding:5%;"> 
        
        <!-- Título -->
        <h1>Conversão de Idade para Dias</h1>    
        
        <!-- Aba de Informações -->
        <!-- TextArea da Idade -->
        <div class="mb-3">
            <label for="lPeso" class="form-label">Informe a sua idade:</label>
            <input type="number" class="form-control" id="idade" name = "idade">
        </div>

        <!-- Fim da Aba de Informações -->

        <!-- Botão -->
        <!-- Botão de Conversão de Idade para Dias -->
        <button type="submit" class="btn btn-primary">Realizar a conversão
            <?php
                
                //Verificando se todos os campos foram preenchidos com números
                if(isset($_POST['idade'])){
                    $idade = $_POST['idade'];

                    //Coletando os números e armazenando nas variáveis
                    $resultado = $funcao->converterIdadeDia($idade);

                }//Fim da Verificação
            ?>
        </button>
        <!-- Fim do Botão de Conversão de Idade para Dias -->

        <!-- Exibição do resultado -->
        <h2>
            <?php
            
                //Verificando se os campos estão preenchidos
                if(isset($_POST['idade'])){
                    
                    //Executando o método...
                    echo $resultado;
                    
                }else{

                    //Se não estiverem preenchidos...
                    echo "Por favor, Preencha os campos!";

                }//Fim da Verificação
                
            ?>
        </h2>

    </form>
    <!-- Fim do Formulário de Informações-->


</body>
</html>