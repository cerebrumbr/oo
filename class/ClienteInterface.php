<?php

    interface ClienteInterface {
        public function setGrauImportancia($estrelas = 1);
        public function getGrauImportancia();
    }