<?php 
    # Nomeando o arquivo (Nome do Projeto)
    namespace Projeto\TI23T\php;

    //Classe Função
    class Funcao{

        //Encapsulamento = Evitar que outras classes do projeto acessem diretamente as suas variáveis
        private int $num1;
        private int $num2;
        private int $resultado;

        //Construtor = Instacia as variáveis
        public function __construct(){
            //Instanciando o valor do resultado
            $this->resultado = 0;
        }

        //Coletar
        public function coletar(int $num1, int $num2)
        {
            //Separando variáveis de parâmetros
            //Variável       Parâmetro
            $this->num1      = $num1;
            $this->num2      = $num2;

        }//Fim do Coletar

        //Métodos Verificadores(SET) e Acesso(GET)
        //GET
        public function __get(string $dados):mixed
        {
            //Retornando os dados que serão visualizados
            return $this->dados;
        }//Fim do GET

        //SET
        public function __set(string $variavel, string $novoDado):void
        {
            //
            $this->variavel = $novoDado;
        }//Fim do SET

        //Métodos
        //Método Somar
        public function somar(){

            # Usando a função SET
            //Armazenando o resultado da soma na variável resultado
            $this->resultado = $this->num1 + $this->num2;

        }//Fim do Método Somar

        //Método Subtrair
        public function subtrair(){

            # Usando a função SET
            //Armazenando o resultado da subtração na variável resultado
            $this->resultado = $this->num1 - $this->num2;

        }//Fim do Método Subtrair

        //Método Multiplicar
        public function multiplicar(){

            # Usando a função SET
            //Armazenando o resultado da multiplicação na variável resultado
            $this->resultado = $this->num1 * $this->num2;

        }//Fim do Método Multiplicar

        //Método Divisão
        public function divisão(){

            //Validação
            if($this->num2 <= 0){

                //Se for menor ou igual a zero...
                $this->resultado = "Impossível dividir por zero!";

            }else{

                $this->resultado = $this->num1 / $this->num2;

            }//Fim da Validação

        }//Fim do Método Divisão
    }//Fim da classe Função

?> <!-- Fechamento da Tag PHP -->