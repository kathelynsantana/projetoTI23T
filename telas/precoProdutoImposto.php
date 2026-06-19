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
    <title>Aplicação de Impostos</title>
</head>
<body>

    <!-- Formulário de Informações-->
    <!-- Fazendo ajustes no design da tela -->
    <form method="POST" style="text-align:center;margin:10%;background-color:#ffb5ff;padding:5%;"> 
        
        <!-- Título -->
        <h1>Aplicação de 18% de Imposto no preço de um produto</h1>    
        
        <!-- Aba de Informações -->
        <!-- TextArea do Preço do Produto -->
        <div class="mb-3">
            <label for="lPreco" class="form-label">Informe o preço do produto:</label>
            <input type="text" class="form-control" id="preco" name = "preco">
        </div>

        <!-- Fim da Aba de Informações -->

        <!-- Botão -->
        <!-- Botão de Aplicação da Taxa de Imposto -->
        <button type="submit" class="btn btn-primary">Calcular a preço do produto com taxação
            <?php
                
                //Verificando se todos os campos foram preenchidos com números
                if(isset($_POST['preco'])){
                    $preco = (float)$_POST['preco'];

                    //Coletando os números e armazenando nas variáveis
                    $resultado = $funcao->aplicarImposto($preco);

                }//Fim da Verificação
            ?>
        </button>
        <!-- Fim do Botão de Aplicação da Taxa de Imposto  -->

        <!-- Exibição do resultado -->
        <h2>
            <?php
            
                //Verificando se os campos estão preenchidos
                if(isset($_POST['preco'])){
                    
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