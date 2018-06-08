<?php
    class Auto{
        public $_id;
        public $_patente;


        public function __construct($pId, $pPatente){
            $this->_id      = $pId;
            $this->_patente = $pPatente;
        }

        public function ToString(){
            return "$this->_id - $this->_patente ";
        }
    }

?>