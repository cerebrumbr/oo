<?php
    require_once("functions/mask.php");

    class PessoaJuridica implements ClienteInterface {
        private $nomeFantasia;
        private $razaoSocial;
        private $cnpj;
        private $endereco;
        private $cidade;
        private $telefone;

        private $grauImportancia = 1;

        public function __construct($nome, $razaoSocial, $cnpj, $endereco, $cidade) {
            $this->setNomeFantasia($nome)
                ->setRazaoSocial($razaoSocial)
                ->setCnpj($cnpj)
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

        public function setEndereco($endereco)
        {
            $this->endereco = $endereco;
            return $this;
        }

        public function getEndereco()
        {
            return $this->endereco;
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
            $this->cnpj = mask($cnpj, "###.###.###-##");;

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
            return true;
        }
    }