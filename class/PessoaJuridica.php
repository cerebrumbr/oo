<?php

    class PessoaJuridica extends Cliente implements ClienteInterface {
        private $nomeFantasia;
        private $razaoSocial;
        private $cnpj;

        public function __construct($nome, $razaoSocial, $cnpj, $endereco, $cidade) {
            $this->setNomeFantasia($nome)
                ->setRazaoSocial($razaoSocial)
                ->setCnpj($cnpj)
                ->setEndereco('residencial', $endereco)
                ->setCidade($cidade);
        }

        public function setNomeFantasia($nome)
        {
            $this->nomeFantasia = $nome;
            return $this;
        }

        public function getNomeFantasia() {
            return $this->nomeFantasia;
        }

        public function setCnpj($cnpj)
        {
            $this->cnpj = mask($cnpj, "##.###.###/####-##");

            return $this;
        }

        public function getCnpj()
        {
            return $this->cnpj;
        }

        public function setRazaoSocial($razaoSocial)
        {
            $this->razaoSocial = $razaoSocial;

            return $this;
        }

        public function getRazaoSocial()
        {
            return $this->razaoSocial;
        }

        public function ePessoaJuridica() {
            return true;
        }
    }