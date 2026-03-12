<?php 
    namespace Projeto\model;
    class Endereco{
        private int $codigo;
        private string $logradouro;
        private int $numero;
        private string $bairro;
        private string $cep;
        private string $complemento;
        private string $cidade;
        private string $estado;
        private string $pais;

        public function __construct(int $codigo, string $logradouro, int $numero, string $bairro, string $cep, string $complemento, string $cidade, string $estado, string $pais){
            $this->codigo = $codigo; //método SET
            $this->logradouro = $logradouro;
            $this->numero = $numero;
            $this->bairro = $bairro;
            $this->cep = $cep;
            $this->complemento = $complemento;
            $this->cidade = $cidade;
            $this->estado = $estado;
            $this->pais = $pais;
        }

        public function __get(string $dado): mixed{
            return $this->$dado;
        }

        public function __set(string $variavel, string $novoDado): void{
            $this->variavel = $novoDado;
        }

        public function imprimir(): string{
            return "<br>Código: ".$this->codigo.
                   "<br>Logradouro: ".$this->logradouro.
                   "<br>Número: ".$this->numero.
                   "<br>Bairro: ".$this->bairro.
                   "<br>CEP: ".$this->cep.
                   "<br>Complemento: ".$this->complemento.
                   "<br>Cidade: ".$this->cidade.
                   "<br>Estado: ".$this->estado.
                   "<br>País: ".$this->pais;
        }
    }
?>