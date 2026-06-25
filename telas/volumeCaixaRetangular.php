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
    <title>Cálculo do Volume de uma Caixa Retangular</title>
</head>
<body>

    <!-- Formulário de Informações-->
    <!-- Fazendo ajustes no design da tela -->
    <form method="POST" style="text-align:center;margin:10%;background-color:#ffb5ff;padding:5%;"> 
        
        <!-- Título -->
        <h1>Cálculo do Volume de uma Caixa Retangular</h1>    
        
        <!-- Aba de Informações -->
        <!-- TextArea do Comprimento da Caixa -->
        <div class="mb-3">
            <label for="lComprimento" class="form-label">Informe o comprimento da caixa:</label>
            <input type="text" class="form-control" id="comprimento" name = "comprimento">
        </div>

        <!-- TextArea da Largura da Caixa -->
        <div class="mb-3">
            <label for="lLargura" class="form-label">Informe a largura da caixa:</label>
            <input type="text" class="form-control" id="largura" name = "largura">
        </div>

        <!-- TextArea da Altura da Caixa -->
        <div class="mb-3">
            <label for="lAltura" class="form-label">Informe a altura da caixa:</label>
            <input type="text" class="form-control" id="altura" name = "altura">
        </div>

        <!-- Fim da Aba de Informações -->

        <!-- Botão -->
        <!-- Botão de Cálculo do Volume de uma Caixa Retangular -->
        <button type="submit" class="btn btn-primary">Calcular o volume
            <?php
                
                //Verificando se todos os campos foram preenchidos com números
                if(isset($_POST['comprimento']) || isset($_POST['largura']) || isset($_POST['altura'])){
                    $comprimento = (float)$_POST['comprimento'];
                    $largura     = (float)$_POST['largura'];
                    $altura      = (float)$_POST['altura'];

                    //Coletando os números e armazenando nas variáveis
                    //Executando o cálculo...
                    $resultado = $funcao->calculoVolumeCaixa($comprimento, $largura, $altura);

                }//Fim da Verificação
            ?>
        </button>
        <!-- Fim do Botão de Cálculo do Volume de uma Caixa Retangular -->

        <!-- Exibição do resultado -->
        <h2>
            <?php
            
                //Verificando se os campos estão preenchidos
                if(isset($_POST['comprimento']) || isset($_POST['largura']) || isset($_POST['altura'])){
                    
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