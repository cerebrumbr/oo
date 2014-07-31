<?php
    require_once("functions/mask.php");

    class PessoaFisica implements ClienteInterface {
        private $nome;
        private $cpf;
        private $endereco;
        private $cidade;
        private $telefone;

        private $grauImportancia;

        public function __construct($nome, $cpf, $endereco, $cidade) {
            $this->setNome($nome)
                ->setCpf($cpf)
                ->setEndereco($endereco)
                ->setCidade($cidade);
        }
        /**
         * @param mixed $cidade
         */
        public function setCidade($cidade)
        {
            $this->cidade = $cidade;
            return $this;
        }

        /**
         * @return mixed
         */
        public function getCidade()
        {
            return $this->cidade;
        }

        /**
         * @param mixed $cpf
         */
        public function setCpf($cpf)
        {
            $this->cpf = mask($cpf, "###.###.###-##");;

            return $this;
        }

        /**
         * @return mixed
         */
        public function getCpf()
        {
            return $this->cpf;
        }

        /**
         * @param mixed $endereco
         */
        public function setEndereco($endereco)
        {
            $this->endereco = $endereco;
            return $this;
        }

        /**
         * @return mixed
         */
        public function getEndereco()
        {
            return $this->endereco;
        }

        /**
         * @param mixed $nome
         */
        public function setNome($nome)
        {
            $this->nome = $nome;
            return $this;
        }

        /**
         * @return mixed
         */
        public function getNome()
        {
            return $this->nome;
        }

        /**
         * @param mixed $telefone
         */
        public function setTelefone($telefone)
        {
            $mask = (strlen($telefone) == 10 ? "(##) ####-####" : "(##) # ####-####");
            $this->telefone = mask($telefone, $mask);;

            return $this;
        }

        /**
         * @return mixed
         */
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

        public function ePessoaJuririca()
        {
            return false;
        }
    }