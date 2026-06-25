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
    <title>Cálculo do Salário Mensal por Horas Trabalhadas</title>
</head>
<body>

    <!-- Formulário de Informações-->
    <!-- Fazendo ajustes no design da tela -->
    <form method="POST" style="text-align:center;margin:10%;background-color:#ffb5ff;padding:5%;"> 
        
        <!-- Título -->
        <h1>Cálculo do Salário Mensal por Horas Trabalhadas</h1>    
        
        <!-- Aba de Informações -->
        <!-- TextArea do Valor por Horas Trabalhadas -->
        <div class="mb-3">
            <label for="lValorHora" class="form-label">Informe o valor por horas trabalhadas:</label>
            <input type="text" class="form-control" id="valor" name = "valor">
        </div>

        <!-- TextArea das Horas Trabalhadas -->
        <div class="mb-3">
            <label for="lHorasTrabalhadas" class="form-label">Informe as horas trabalhadas:</label>
            <input type="number" class="form-control" id="horasTrabalhadas" name = "horasTrabalhadas">
        </div>

        <!-- Fim da Aba de Informações -->

        <!-- Botão -->
        <!-- Botão de Cálculo do Salário Mensal -->
        <button type="submit" class="btn btn-primary">Calcular o salário
            <?php
                
                //Verificando se todos os campos foram preenchidos com números
                if(isset($_POST['valor']) || isset($_POST['horasTrabalhadas'])){
                    $valor            = (float)$_POST['valor'];
                    $horasTrabalhadas = $_POST['horasTrabalhadas'];

                    //Coletando os números e armazenando nas variáveis
                    //Executando o cálculo...
                    $resultado = $funcao->calculoSalarioMensal($valor, $horasTrabalhadas);

                }//Fim da Verificação
            ?>
        </button>
        <!-- Fim do Botão de Cálculo do Salário Mensal -->

        <!-- Exibição do resultado -->
        <h2>
            <?php
            
                //Verificando se os campos estão preenchidos
                if(isset($_POST['valor']) || isset($_POST['horasTrabalhadas'])){
                    
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