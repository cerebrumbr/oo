<?php
    require_once("functions/mask.php");

    class Cliente {
        public $nome;
        public $cpf;
        public $endereco;
        public $cidade;
        public $telefone;

        public function __construct($nome, $cpf, $endereco, $cidade, $telefone) {
            $this->nome = $nome;
            $this->cpf = $this->formatarValor($cpf)->cpf();
            $this->endereco = $endereco;
            $this->cidade = $cidade;
            $this->telefone = $this->formatarValor($telefone)->telefone();
        }

        private function formatarValor($valor) {
            $this->valor_tmp = $valor;
            return $this;
        }

        private function telefone() {
            $mask = (strlen($this->valor_tmp) == 10 ? "(##) ####-####" : "(##) # ####-####");
            $resultado = mask($this->valor_tmp, $mask);
            unset($this->valor_tmp);

            return $resultado;
        }

        private function cpf() {
            $cpf = $this->valor_tmp;
            unset($this->valor_tmp);

            return mask($cpf, "###.###.###-##");
        }
    }