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
    <title>Cálculo da Área do Triângulo</title>
</head>
<body>
    <!-- Formulário de Informações da Área do Triângulo -->
    <form method="POST" style="text-align:center;margin:10%;background-color:#ffb5ff;padding:5%;"> 

        <!-- Título -->
        <h1>Cálculo da Área do Triângulo</h1>

        <!-- Formulário de Informações -->
        <!-- TextArea da Largura do Triângulo -->
        <div class="mb-3">
            <label for="lBase" class="form-label">Informe a base (comprimento) do triângulo:</label>
            <input type="text" class="form-control" id="base" name = "base">
        </div>

        <!-- TextArea do Comprimento do Triângulo -->
        <div class="mb-3">
            <label for="lAltura" class="form-label">Informe a altura do triângulo:</label>
            <input type="text" class="form-control" id="altura" name = "altura">
        </div>

        <!-- Botão -->
        <!-- Botão de Cálculo da Área do Triângulo -->
        <button type="submit" class="btn btn-primary">Realizar a equação
            <?php
                
                //Verificando se todos os campos foram preenchidos com números
                if(isset($_POST['base']) || isset($_POST['altura'])){
                    $base   = (float)$_POST['base'];
                    $altura = (float)$_POST['altura'];

                    //Coletando os números e armazenando nas variáveis
                    $resultado = $funcao->areaTriangulo($base, $altura);

                }//Fim da Verificação

            ?>
        </button>
        <!-- Fim do Botão de Cálculo da Área do Triângulo -->

        <!-- Exibição do resultado -->
        <h2>
            <?php
            
                //Verificando se os campos estão preenchidos
                if(isset($_POST['base']) || isset($_POST['altura'])){
                    
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