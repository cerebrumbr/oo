<?php
    require_once("functions/mask.php");

    class PessoaFisica implements ClienteInterface {
        private $nome;
        private $cpf;
        private $endereco;
        private $cidade;
        private $telefone;

        private $grauImportancia = 1;

        public function __construct($nome, $cpf, $endereco, $cidade) {
            $this->setNome($nome)
                ->setCpf($cpf)
                ->setEndereco($endereco)
                ->setCidade($cidade);
        }

        public function setCidade($cidade)
        {
            $this->cidade = $cidade;
            return $this;
        }

        public function getCidade()
        {
            return $this->cidade;
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

        public function setEndereco($endereco)
        {
            $this->endereco = $endereco;
            return $this;
        }

        public function getEndereco()
        {
            return $this->endereco;
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

        public function setTelefone($telefone)
        {
            $mask = (strlen($telefone) == 10 ? "(##) ####-####" : "(##) # ####-####");
            $this->telefone = mask($telefone, $mask);;

            return $this;
        }

        public function getTelefone()
        {
            return $this->telefone;
        }

        public function setGrauImportancia($estrelas = 1)
        {
            $this->grauImportancia = $estrelas;
        }

        public function getGrauImportancia()
        {
            return $this->grauImportancia;
        }

        public function ePessoaJuridica()
        {
            return false;
        }
    }