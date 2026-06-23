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
    <title>Cálculo do IMC</title>
</head>
<body>

        <!-- Tabela da Classificação do IMC -->
        <table class="table-imc">
        <thead>
            <!-- Cabeçalho da Tabela -->
            <tr class="cabecalho">
            <th scope="col">Faixa de IMC</th>
            <th scope="col">Classificação</th>
            </tr>
        </thead>

            <!-- Fim do Cabeçalho da Tabela -->

            <!-- Células da Tabela -->
            <tbody>
                <tr>
                <th scope="row">Menor que 18,5</th>
                <td>Abaixo do peso</td>
                </tr>

                <tr>
                <th scope="row">18,5 a 24,9</th>
                <td>Peso normal</td>
                </tr>

                <tr>
                <th scope="row">25,0 a 29,9</th>
                <td>Sobrepeso</td>
                </tr>

                <tr>
                <th scope="row">30,0 a 34,9</th>
                <td>Obesidade Grau I</td>
                </tr>

                <tr>
                <th scope="row">35,0 a 39,9</th>
                <td>Obesidade Grau II</td>
                </tr>

                <tr>
                <th scope="row">40,0 ou mais</th>
                <td>Obesidade Grau III (Grave)</td>
                </tr>
            </tbody>
        </table>

        <!-- Fim da Tabela da Classificação do IMC -->

    <!-- Formulário de Informações-->
    <!-- Fazendo ajustes no design da tela -->
    <form method="POST" style="text-align:center;margin:10%;background-color:#ffb5ff;padding:5%;"> 
        
        <!-- Título -->
        <h1>Cálculo do Índice de Massa Corporal (IMC)</h1>    
        
        <!-- Aba de Informações -->
        <!-- TextArea do Peso -->
        <div class="mb-3">
            <label for="lPeso" class="form-label">Informe o seu peso:</label>
            <input type="text" class="form-control" id="peso" name = "peso">
        </div>

        <!-- TextArea da Altura -->
        <div class="mb-3">
            <label for="lAltura" class="form-label">Informe a sua altura:</label>
            <input type="text" class="form-control" id="altura" name = "altura">
        </div>

        <!-- Fim da Aba de Informações -->

        <!-- Botões -->
        <!-- Botão de Cálculo do IMC -->
        <button type="submit" class="btn btn-primary">Realizar o cálculo
            <?php
                
                //Verificando se todos os campos foram preenchidos com números
                if(isset($_POST['peso']) || isset($_POST['altura'])){
                    $peso   = (float)$_POST['peso'];
                    $altura = (float)$_POST['altura'];

                    //Coletando os números e armazenando nas variáveis
                    $resultado = $funcao->imc($peso, $altura);

                }//Fim da Verificação
            ?>
        </button>
        <!-- Fim do Botão de Cálculo do IMC -->

        <!-- Exibição do resultado -->
        <h2>
            <?php
            
                //Verificando se os campos estão preenchidos
                if(isset($_POST['peso']) || isset($_POST['altura'])){
                    
                    //Executando o método...
                    echo $resultado;
                    
                }else{

                    //Se não estiverem preenchidos...
                    echo "Por favor, Preencha os campos!";

                }//Fim da Verificação
                
            ?>
        </h2>
    </form>
    <!-- Fim do Formulário de Informações sobre o IMC -->

</body>
</html>