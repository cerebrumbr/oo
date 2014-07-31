<?php
    require_once("functions/mask.php");

    class Cliente {
        private $nome;
        private $cpf;
        private $endereco;
        private $cidade;
        private $telefone;

        public function __construct($nome, $cpf, $endereco, $cidade, $telefone) {
            $this->setNome($nome)
                ->setCpf($cpf)
                ->setEndereco($endereco)
                ->setCidade($cidade)
                ->setTelefone($telefone);
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
    }