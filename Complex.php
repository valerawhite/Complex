<?php //php 7.2.24




Class Complex {

    private $a, $b, $c, $d;

    public function __construct($a, $b, $c, $d) {
        $this->a = (is_numeric($a)) ?  $a : $b;
        $this->b = (is_numeric($b)) ?  $a : $b;
        $this->c = (is_numeric($c)) ?  $c : $d;
        $this->d = (is_numeric($d)) ?  $c : $d;
    }
    
    public function getSumm() {
        $result = ($this->a + $this->c) . "+" . ($this->b[0] + $this->d[0]) . "i";
        return $result;
    }
    
    public function getMinus() {
        $result = ($this->a - $this->c) . "+" . ($this->b[0] - $this->d[0]) . "i";
        return $result;
    }
    
    public function getComposition() {
        $result = ($this->a * $this->c - $this->b[0] * $this->d[0]) . "+" . ($this->a * $this->d[0] + $this->b[0] * $this->c) . "i";
        return $result;
    }
    
    public function getDivision() {
        $result = ($this->a * $this->c + $this->b[0] * $this->d[0]) / (pow($this->c,2)  + pow($this->d[0],2)) . "+" . 
            ($this->b[0] * $this->c - $this->a * $this->d[0]) / (pow($this->c,2)  + pow($this->d[0],2)) . "i";
        return $result;
    }
    
}
    
$complex = new Complex('2i','4','6i','8');
echo $complex->getDivision();
?>