<?php
    namespace Projeto\model; // caminho de diretorios //Determinando o local de arquivo Pessoa
    require_once('Endereco.php');
    use Projeto\model\Endereco;

    class Pessoa{ //O "Pessoa" é a mãe
        //public -> Todo mundo visualiza
        //protected -> Família visualiza (Herança)
        //private -> Apenas a classe mãe visualiza


        private int $codigo;//Tipo da variável
        private string $nome;
        private float $cpf;
        private string $telefone;
        private Endereco $endereco;
        private bool $status; //true or false

        //Primeiro método de qualquer classe // Esse não precisa
        // public function __construct(){ //Quando tem-se parenteses é um método
        //     //This -> isso
        //     $this->codigo = 0;
        //     $this->nome = "";
        //     $this->cpf = 0;
        //     $this->telefone = "";
        //     $this->endereco = "";
        //     //$this->dtNascimento = new DateTime(); //0000-00-00 00.00.00
        //     $this->status = true;
        // }//fim do método construtor

        public function __construct(int $codigo, string $nome, float $cpf, string $telefone, Endereco $endereco, bool $status){
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->status = $status;

        }//fim do construtor com parâmetros

        //Método Get e Set
        public function __get(string $dado): mixed {  //":" retorno //MIXED é misto, pode trazer boolean, floa, string e int
            return $this->dado;
        }//fim do get

        public function __set(string $variavel, string $novoDado):void { //VOID é quando não vou retornar algo
            $this->variavel = $novoDado;
        }//fim do set

        public function imprimir():string {
            return "<br>Código: ".$this->codigo.
                   "<br>Nome: ".$this->nome.
                   "<br>CPF: ".$this->cpf.
                   "<br>Telefone: ".$this->telefone.
                   "<br>Endereço: ".$this->endereco->imprimir().
                   "<br>Status: ".$this->status;
        }//fim do método

    }//fim da classe Pessoa

?>