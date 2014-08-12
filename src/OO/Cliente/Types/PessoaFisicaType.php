<?php

    namespace OO\Cliente\Types;

    use OO\Cliente\ClienteAbstract;
    use OO\Cliente\Util\ClienteInterface;

    class PessoaFisicaType extends ClienteAbstract implements ClienteInterface {
        private $nome;
        private $cpf;

        public function __construct($nome, $cpf) {
            parent::__construct();

            $this->setNome($nome)
                ->setCpf($cpf);
        }

        public function setCpf($cpf)
        {
            $this->cpf = $cpf;

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

        public function ePessoaJuridica()
        {
            return false;
        }
    }