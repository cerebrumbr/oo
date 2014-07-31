<?php

    interface ClienteInterface {
        public function setNome();
        public function getNome();
        public function setCpf();
        public function getCpf();
        public function setEndereco();
        public function getEndereco();
        public function setTelefone();
        public function getTelefone();
        public function setGrauImportancia($estrelas = 1);
        public function getGrauImportancia();
    }