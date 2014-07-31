<?php

    interface ClienteInterface {
        public function setEndereco($endereco);
        public function getEndereco();

        public function setTelefone($telefone);
        public function getTelefone();

        public function setGrauImportancia($estrelas = 1);
        public function getGrauImportancia();

        public function ePessoaJuridica();
    }