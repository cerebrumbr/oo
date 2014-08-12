<?php

    namespace OO\Endereco;

    class Endereco {

        private $logradouro;
        private $numero;
        private $complemento;
        private $bairro;
        private $cidade;
        private $estado;
        private $cep;
        private $eEnderecoCobranca = false;

        public function __construct($logradouro, $numero, $bairro, $eEnderecoCobranca = false) {
            $this->setLogradouro($logradouro);
            $this->setNumero($numero);
            $this->setBairro($bairro);

            $this->setEEnderecoCobranca($eEnderecoCobranca);
        }

        /**
         * @param mixed $bairro
         */
        public function setBairro($bairro)
        {
            $this->bairro = $bairro;

            return $this;
        }

        /**
         * @param mixed $cep
         */
        public function setCep($cep)
        {
            $this->cep = $cep;
        }

        /**
         * @return mixed
         */
        public function getCep()
        {
            return $this->cep;
        }

        /**
         * @param mixed $estado
         */
        public function setEstado($estado)
        {
            $this->estado = $estado;

            return $this;
        }

        /**
         * @return mixed
         */
        public function getEstado()
        {
            return $this->estado;
        }

        /**
         * @return mixed
         */
        public function getBairro()
        {
            return $this->bairro;
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
         * @param mixed $complemento
         */
        public function setComplemento($complemento)
        {
            $this->complemento = $complemento;

            return $this;
        }

        /**
         * @return mixed
         */
        public function getComplemento()
        {
            return $this->complemento;
        }

        /**
         * @param boolean $eEnderecoCobranca
         */
        public function setEEnderecoCobranca($eEnderecoCobranca)
        {
            $this->eEnderecoCobranca = $eEnderecoCobranca;

            return $this;
        }

        /**
         * @return boolean
         */
        public function EEnderecoCobranca()
        {
            return $this->eEnderecoCobranca;
        }

        /**
         * @param mixed $logradouro
         */
        public function setLogradouro($logradouro)
        {
            $this->logradouro = $logradouro;

            return $this;
        }

        /**
         * @return mixed
         */
        public function getLogradouro()
        {
            return $this->logradouro;
        }

        /**
         * @param mixed $numero
         */
        public function setNumero($numero)
        {
            $this->numero = $numero;

            return $this;
        }

        /**
         * @return mixed
         */
        public function getNumero()
        {
            return $this->numero;
        }

    }