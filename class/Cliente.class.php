<?php
    class Cliente {
        public $nome;
        public $cpf;
        public $endereco;

        public function __construct($nome, $cpf, $endereco) {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->endereco = $endereco;
        }
    }