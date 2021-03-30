<?php 
class Kubus {
    public $rusuk;

    function __construct($rusuk) {
        $this->rusuk = $rusuk;
    }

    function luas() {
        return 6 * $this->rusuk**2;
    }

    function volume() {
        return $this->rusuk **3;
    }
}

class Bola {
    public static $phi = 3.14;
    public $r;

    function __construct($r) {
        $this->r = $r;
        Self::$phi;
    }

    function luas() {
        return 4*Self::$phi*$this->r**2;
    }

    function volume() {
        return 4/3*Self::$phi*$this->r**3;
    }
}

class Balok {
    public $p;
    public $l;
    public $t;

    function __construct($p,$l,$t) {
        $this->p = $p;
        $this->l = $l;
        $this->t = $t;
    }

    function luas() {
        return 2*(($this->p*$this->l)+($this->p*$this->t)+($this->l*$this->t));
    }

    function volume() {
        return $this->p*$this->l*$this->t;
    }
}
?>