<?php

    namespace OO\Cliente\Types;

    use OO\Cliente\ClienteAbstract;
    use OO\Cliente\Util\ClienteInterface;

    class PessoaJuridicaType extends ClienteAbstract implements ClienteInterface {
        private $nomeFantasia;
        private $razaoSocial;
        private $cnpj;

        public function __construct($nome, $razaoSocial, $cnpj) {
            parent::__construct();

            $this->setNomeFantasia($nome)
                ->setRazaoSocial($razaoSocial)
                ->setCnpj($cnpj);
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
            $this->cnpj = $cnpj;

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