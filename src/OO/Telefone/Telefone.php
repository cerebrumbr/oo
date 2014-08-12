<?php

    namespace OO\Telefone;

    class Telefone {

        private $ddd;
        private $telefone;

        public function __construct($ddd, $telefone) {
            $this->setDdd($ddd);
            $this->setTelefone($telefone);
        }

        /**
         * @param mixed $ddd
         */
        public function setDdd($ddd)
        {
            $this->ddd = $ddd;
        }

        /**
         * @return mixed
         */
        public function getDdd()
        {
            return $this->ddd;
        }

        /**
         * @param mixed $telefone
         */
        public function setTelefone($telefone)
        {
            $this->telefone = $telefone;
        }

        /**
         * @return mixed
         */
        public function getTelefone()
        {
            return $this->telefone;
        }

    }