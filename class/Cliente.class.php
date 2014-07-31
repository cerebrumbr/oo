<?php

    class Cliente {
        private $endereco;
        private $cidade;
        private $telefone;
        private $grauImportancia = 1;

        public function setEndereco($endereco)
        {
            $this->endereco = $endereco;
            return $this;
        }

        public function getEndereco()
        {
            return $this->endereco;
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