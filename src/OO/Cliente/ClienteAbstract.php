<?php

    namespace OO\Cliente;

    use OO\Endereco\Endereco;
    use OO\Telefone\Telefone;

    abstract class ClienteAbstract {
        public $id;
        private static $count;

        private $enderecos = [];
        private $telefones = [];
        private $grauImportancia = 1;

        public function __construct() {
            self::$count += 1;
            $this->id = self::$count;
        }

        public function getId() {
            return $this->id;
        }

        public final function addEndereco(Endereco $endereco) {
            $this->enderecos[] = $endereco;

            return $this;
        }

        public final function getEnderecos() {
            return $this->enderecos;
        }

        public final function addTelefone(Telefone $telefone) {
            $this->telefones[] = $telefone;

            return $this;
        }

        public final function getTelefones() {
            return $this->telefones;
        }

        public final function setGrauImportancia($estrelas = 1)
        {
            $estrelas = (int) ($estrelas > 5 ? 5 : $estrelas);

            $this->grauImportancia = $estrelas;
        }

        public final function getGrauImportancia()
        {
            return $this->grauImportancia;
        }
    }