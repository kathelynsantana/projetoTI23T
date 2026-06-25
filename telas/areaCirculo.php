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
    <title>Cálculo da Área do Círculo com base no Raio</title>
</head>
<body>
    <!-- Formulário de Informações da Área do Retângulo -->
    <form method="POST" style="text-align:center;margin:10%;background-color:#ffb5ff;padding:5%;"> 

        <!-- Título -->
        <h1>Cálculo da Área do Círculo com base no Raio</h1>

        <!-- Formulário de Informações -->
        <!-- TextArea do Raio do Círculo -->
        <div class="mb-3">
            <label for="lRaio" class="form-label">Informe o raio do círculo:</label>
            <input type="text" class="form-control" id="raio" name = "raio">
        </div>

        <!-- Botão -->
        <!-- Botão de Cálculo da Área do Círculo com base no Raio -->
        <button type="submit" class="btn btn-primary">Realizar o cálculo
            <?php
                
                //Verificando se todos os campos foram preenchidos com números
                if(isset($_POST['raio'])){
                    $raio = (float)$_POST['raio'];

                    //Coletando os números e armazenando nas variáveis
                    $resultado = $funcao->calculoAreaCirculo($raio);
                }//Fim da Verificação

            ?>
        </button>
        <!-- Fim do Botão de Cálculo da Área do Círculo com base no Raio -->

        <!-- Exibição do resultado -->
        <h2>
            <?php
            
                //Verificando se os campos estão preenchidos
                if(isset($_POST['raio'])){
                    
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