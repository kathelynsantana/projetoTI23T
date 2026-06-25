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
    <title>Cálculo da Velocidade Média</title>
</head>
<body>
    <!-- Formulário de Informações da Área do Retângulo -->
    <form method="POST" style="text-align:center;margin:10%;background-color:#ffb5ff;padding:5%;"> 

        <!-- Título -->
        <h1>Cálculo da Velocidade Média</h1>

        <!-- Formulário de Informações -->
        <!-- TextArea da Distância -->
        <div class="mb-3">
            <label for="lDistancia" class="form-label">Informe a distância percorrida:</label>
            <input type="text" class="form-control" id="distancia" name = "distancia">
        </div>

        <!-- TextArea do Tempo -->
        <div class="mb-3">
            <label for="lTempo" class="form-label">Informe o tempo total gasto:</label>
            <input type="text" class="form-control" id="tempo" name = "tempo">
        </div>

        <!-- Botão -->
        <!-- Botão de Cálculo da Velocidade Média -->
        <button type="submit" class="btn btn-primary">Realizar o cálculo
            <?php
                
                //Verificando se todos os campos foram preenchidos...
                if(isset($_POST['distancia']) || isset($_POST['tempo'])){
                    $distancia = (float)$_POST['distancia'];
                    $tempo     = (float)$_POST['tempo'];

                    //Coletando os números e armazenando nas variáveis
                    $resultado = $funcao->calculoVelocidadeMedia($distancia, $tempo);

                }//Fim da Verificação

            ?>
        </button>
        <!-- Fim do Botão de Cálculo da Velocidade Média -->

        <!-- Exibição do resultado -->
        <h2>
            <?php
            
                //Verificando se os campos estão preenchidos
                if(isset($_POST['distancia']) || isset($_POST['tempo'])){
                    
                    //Executando o método...
                    echo $resultado;
                    
                }else{

                    //Se os campos não estiverem preenchidos...
                    echo "Por favor, Preencha os campos!";

                }//Fim da Verificação
                
            ?>
        </h2>
        <!-- Fim da Exibição do resultado-->
        
    </form>
    <!-- Fim do Formulário -->
</body>
</html>