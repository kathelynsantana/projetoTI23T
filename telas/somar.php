<?php namespace Projeto\TI23T\telas; //Nome do Projeto
    //Acessando arquivos...
    require_once('../php/funcoes.php'); //Acessando o arquivo...
    include('cabecalho.php');//Tentando utilizar a formatação 
    use Projeto\TI23T\php\Funcao; //Acessando a classe que está no arquivo funcoes.php...

    //Variável de Conexão
    //Conectando a Index e Funcao
    $funcao = new Funcao(); //Construtor da classe funcao
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somar</title>
</head>
<body>
    <!-- Formulário -->
    <!-- Fazendo ajustes no design da tela -->
    <form method="POST" style="text-align:center;margin:10%;background-color:#ffb5ff;padding:5%;"> 
        <h1>Somar</h1> <!-- Título -->   
        
        <!-- Formulário de Informações -->
        <!-- TextArea do Primeiro Número -->
        <div class="mb-3">
            <label for="lPrimeiroNumero" class="form-label">Informe o primeiro número:</label>
            <input type="number" class="form-control" id="primeiroNumero" name = "primeiroNumero">
        </div>

        <!-- TextArea do Segundo Número -->
        <div class="mb-3">
            <label for="lSegundoNumero" class="form-label">Informe o segundo número:</label>
            <input type="number" class="form-control" id="segundoNumero" name = "segundoNumero">
        </div>

        <!-- Fim do Formulário de Informações -->

        <!-- Botões -->
        <!-- Botão Somar -->
        <button type="submit" class="btn btn-primary">Somar
            <?php
                
                //Verificando se todos os campos foram preenchidos com números
                if(isset($_POST['primeiroNumero']) || isset($_POST['segundoNumero'])){
                    $num1 = $_POST['primeiroNumero'];
                    $num2 = $_POST['segundoNumero'];

                    //Coletando os números e armazenando nas variáveis
                    $funcao->coletar($num1, $num2);
                }//Fim do if

            ?>
        </button>
        <!-- Fim do Botão Somar -->

        <h2>
            <?php
            
                //Verificando se os campos estão preenchidos
                if(isset($_POST['primeiroNumero']) || isset($_POST['segundoNumero'])){
                    
                    //Executando o método...
                    echo $funcao->somar();
                    
                }else{

                    //Se não estiverem preenchidos...
                    echo "Preencha os campos!";
                }//Fim da Verificação
                
            ?>
        </h2>
    </form>
    <!-- Fim do Formulário -->
</body>
</html>