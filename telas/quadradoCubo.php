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
    <title>Quadrado e Cubo de um Número</title>
</head>
<body>

    <!-- Formulário de Informações-->
    <!-- Fazendo ajustes no design da tela -->
    <form method="POST" style="text-align:center;margin:10%;background-color:#ffb5ff;padding:5%;"> 
        
        <!-- Título -->
        <h1>Quadrado e Cubo de um Número</h1>    
        
        <!-- Aba de Informações -->
        <!-- TextArea do Número -->
        <div class="mb-3">
            <label for="lNumero" class="form-label">Informe o número:</label>
            <input type="number" class="form-control" id="numero" name = "numero">
        </div>

        <!-- Fim da Aba de Informações -->

        <!-- Botão -->
        <!-- Botão de Cálculo do Quadrado e Cubo de um Número -->
        <button type="submit" class="btn btn-primary">Calcular
            <?php
                
                //Verificando se todos os campos foram preenchidos com números
                if(isset($_POST['numero'])){
                    $num = $_POST['numero'];

                    //Coletando os números e armazenando nas variáveis
                    //Executando o cálculo...
                    $resultado = $funcao->quadradoCuboNumero($num);

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