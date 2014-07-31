<?php
    require_once("functions/mask.php");

    class PessoaFisica extends Cliente implements ClienteInterface {
        private $nome;
        private $cpf;

        public function __construct($nome, $cpf, $endereco, $cidade) {
            $this->setNome($nome)
                ->setCpf($cpf)
                ->setEndereco($endereco)
                ->setCidade($cidade);
        }

        public function setCpf($cpf)
        {
            $this->cpf = mask($cpf, "###.###.###-##");;

            return $this;
        }

        public function getCpf()
        {
            return $this->cpf;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
            return $this;
        }

        public function getNome()
        {
            return $this->nome;
        }

    }