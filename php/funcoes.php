<?php 
    # Nomeando o arquivo (Nome do Projeto)
    namespace Projeto\TI23T\php;

    //Classe Função
    class Funcao{

        //Encapsulamento = Evitar que outras classes do projeto acessem diretamente as suas variáveis
        private int $num1;
        private int $num2;
        private int $resultado;

        private int $a;
        private int $b;
        private int $c;
        private int $delta;
        private int $x1;
        private int $x2;
        private float $peso;
        private float $altura;

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

        //Coletar valores da Equação de Segundo Grau
        public function coletarValor(int $a, int $b, int $c)
        {
            //Separando variáveis de parâmetros
            //Variável       Parâmetro
            $this->a         = $a;
            $this->b         = $b;
            $this->c         = $c;

        }//Fim do Coletar valores da Equação de Segundo Grau

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

            //Retornando o resultado
            return "<br>A soma do $this->num1 e do $this->num2 é: $this->resultado<br>";

        }//Fim do Método Somar

        //Método Subtrair
        public function subtrair(){

            # Usando a função SET
            //Armazenando o resultado da subtração na variável resultado
            $this->resultado = $this->num1 - $this->num2;

             //Retornando o resultado
            return "<br>A subtração do $this->num1 pelo $this->num2 é: $this->resultado<br>";

        }//Fim do Método Subtrair

        //Método Multiplicar
        public function multiplicar(){

            # Usando a função SET
            //Armazenando o resultado da multiplicação na variável resultado
            $this->resultado = $this->num1 * $this->num2;

            //Retornando o resultado
            return "<br>A multiplicação do $this->num1 pelo $this->num2 é: $this->resultado<br>";

        }//Fim do Método Multiplicar

        //Método Divisão
        public function dividir(){

            //Validação
            if($this->num2 <= 0){

                //Se for menor ou igual a zero...
                return "Impossível dividir por zero!";

            }else{

                $this->resultado = $this->num1 / $this->num2;

            }//Fim da Validação
            
             //Retornando o resultado
            return "<br>A divisão do $this->num1 pelo $this->num2 é: $this->resultado<br>";

        }//Fim do Método Divisão

        //Método Bhaskara
        public function bhaskara()
        {
            //Descobrindo o valor de Delta...
            $this->delta = pow($this->b, 2) - 4 * $this->a * $this->c;

            //Verificando se o Delta é negativo
            if($this->delta < 0){
                
                //Se o delta for negativo...
                return "Impossível calcular os valores da raiz de um delta negativo!";

            }

            //Se o delta for positivo ou igual a zero...
            $this->x1 = (-$this->b + sqrt($this->delta))/(2 * $this->a);
            $this->x2 = (-$this->b - sqrt($this->delta))/(2 * $this->a);

            //Retornando o resultado
            return "<br>O valor do delta é: $this->delta. O valor da primeira raiz da equação é: $this->x1 e o valor da segunda raiz é: $this->x2<br>";

        }//Fim do Método Bhaskara

        //Método Cálculo do IMC
        public function imc(float $peso, float $altura)
        {
            //Verificando se o peso e/ou a altura são menores ou iguais a zero...
            if(($peso <= 0) || ($altura <= 0)){

                //Se o peso e/ou a altura forem iguais ou menores do que zero...
                return "Erro! O peso e a altura não podem ser menores ou iguais a zero!";

            }else{
                //Realizando o cálculo...
                $imc = (float)$peso/($altura^2);

                //Classificando o IMC...
                if($imc <= 0){

                    //Se o IMC for igual ou menor que zero...
                    return "Erro! IMC inválido!";

                }else if($imc <= 18.5){

                    //Se o IMC for igual ou menor que 18,5...
                    //Classificação: Abaixo do Peso
                    return "O seu IMC é de: $imc. A Classificação do seu IMC é: Abaixo do Peso.";

                }else if(($imc >= 18.5) && ($imc <= 24.9)){

                    //Se o IMC for igual ou maior que 18,5 e igual ou menor que 24,9...
                    //Classificação: Peso Normal
                    return "O seu IMC é de: $imc. A Classificação do seu IMC é: Peso Normal.";

                }else if(($imc >= 25.0) && ($imc <= 29.9)){

                    //Se o IMC for igual ou maior que 25,0 e igual ou menor que 29,9...
                    //Classificação: Sobrepeso
                    return "O seu IMC é de: $imc. A Classificação do seu IMC é: Sobrepeso.";

                }else if(($imc >= 30.0) && ($imc <= 34.9)){

                    //Se o IMC for igual ou maior que 30,0 e igual ou menor que 34,9...
                    //Classificação: Obesidade Grau I
                    return "O seu IMC é de: $imc. A Classificação do seu IMC é: Obesidade Grau I.";
                
                }else if(($imc >= 35.0) && ($imc <= 39.9)){

                    //Se o IMC for igual ou maior que 35,0 e igual ou menor que 39,9...
                    //Classificação: Obesidade Grau II
                    return "O seu IMC é de: $imc. A Classificação do seu IMC é: Obesidade Grau II.";

                }else if($imc >= 40.0){

                    //Se o IMC for igual ou maior que 40...
                    //Classificação: Obesidade Grau III
                    return "O seu IMC é de: $imc. A Classificação do seu IMC é: Obesidade Grau III (Grave).";
                
                }//Fim da Classificação do IMC
            }//fim do else de validação
        }//Fim do Método Cálculo do IMC

        //Método Cálculo da Área do Retângulo
        public function areaRetangulo(float $base, float $altura)
        {
            //Verificando se a base e/ou altura são menores ou iguais a zero
            if(($base <= 0) || ($altura <= 0)){

                //Se a base e/ou a altura forem iguais ou menores do que zero...
                return "Erro! A base (comprimento) e a altura não podem ser menores ou iguais a zero!";

            }else{

                //Realizando o cálculo...
                $area = (float)$base * $altura;

                //Retornando o resultado
                return "<br>A área do retângulo é: $area.";

            }//Fim da Verificação e do Cálculo

        }//Fim do Método Cálculo da Área do Retângulo

        //Método Cálculo da Área do Triângulo
        public function areaTriangulo(float $base, float $altura)
        {
            //Verificando se a base e/ou altura são menores ou iguais a zero
            if(($base <= 0) || ($altura <= 0)){

                //Se a base e/ou a altura forem iguais ou menores do que zero...
                return "Erro! A base (comprimento) e a altura não podem ser menores ou iguais a zero!";

            }else{

                //Realizando o cálculo...
                $area = (float)$base * $altura/2;

                //Retornando o resultado
                return "<br>A área do Triângulo é: $area.";

            }//Fim da Verificação e do Cálculo

        }//Fim do Método Cálculo da Área do Triângulo

        //Método de Aplicação de Imposto em um Produto
        public function aplicarImposto(float $preco)
        {
            //Verificando se o preço do produto é menor ou igual a zero...
            if(($preco <= 0)){

                //Se o preço for menor ou igual a zero...
                return "Erro! O preço do produto não pode ser menor ou igual a zero!";

            }else{

                //Realizando o cálculo da aplicação do imposto...
                $precoImposto = (float)$preco * 0.18;

                //Retornando o resultado
                return "<br>O preço do produto com a aplicação de 18% de imposto é equivalente à: ".($precoImposto + $preco);

            }//Fim da Verificação e do Cálculo

        }//Fim do Método de Aplicação de Imposto em um Produto

        //Método de Conversão de Idade para Dias
        public function converterIdadeDia(int $idade)
        {
            //Verificando se a idade é menor ou igual a zero...
            if(($idade <= 0)){

                //Se a idade é menor ou igual a zero...
                return "Erro! A idade não pode ser menor ou igual a zero!";

            }else{

                //Realizando o cálculo...
                $diasConvertidos = $idade * 365;

                //Retornando o resultado
                return "<br>$idade anos convertido em dias equivale à $diasConvertidos dias.";

            }//Fim da Verificação e do Cálculo

        }//Fim do Método de Conversão de Idade para Dias

    }//Fim da classe Função
?> <!-- Fechamento da Tag PHP -->