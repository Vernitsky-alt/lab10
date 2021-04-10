<?php

ini_set("display_errors", 1);
error_reporting(-1);

Class A {
    protected $x;

    public function solveLine ($a,$b) {
        if ($a == 0) {
          return null;
        }
        return $this->x = array(-$b / $a);
    }
}
Class B extends A {
    protected function discriminant($a, $b, $c) {
        $x = ($b**2)-4*$a*$c;
        return $x;
    }
    public function solveSquare($a, $b, $c) {
        if($a == 0) {
            return parent::solveLine($b, $c);
        }
        $discriminant = $this->discriminant($a, $b, $c);
        if($discriminant > 0) {
            $squareDiscriminant = sqrt($discriminant);
            $this->x = array((-$b + $squareDiscriminant) / (2 * $a), (-$b - $squareDiscriminant) / (2 * $a));
        }
        if($discriminant == 0) {
            $this->x = array(-$b / (2 * $a));
        }
        if($discriminant < 0) {
           return null; 
        }
        return $this->x;
    }
}
    
$a = new A();
$b = new B();
var_dump($a->solveLine(10,5));
var_dump($b->solveSquare(10,5,3));
