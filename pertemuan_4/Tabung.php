<?php
    class Tabung {
        private $diameter1;
        private $tinggi;
        private $r;
        private $luas_selimut = 0;
        private $phi = 3.14;

        public function __construct($d, $t) {
            $this->diameter1 = $d;
            $this->tinggi = $t;
        }

        public function setDiameter($value){
            $this->diameter1 = $value;
            $this->r = $this->diameter1 /2;
        }
        public function setTinggi($value){
            $this->tinggi = $value;
        }
        public function hitungLuas(){
            $this->luas_selimut = 3.14 * $this->diameter1 * $this->tinggi;
        }
        public function getLuasSelimut(){
            return $this->luas_selimut;
        }
        public function tes(){
            echo 'class tabung';
        }
    }
?>