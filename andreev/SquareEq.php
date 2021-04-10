<?php

namespace andreev;

use core\EquationInterface;

Class SquareEq extends LineEq implements EquationInterface {
    protected function discriminant($a, $b, $c) {
        $dis = ($b**2)-4*$a*$c;
        return $dis;
    }
    public function solve($a, $b, $c) {
        if($a == 0) {
            return parent::solveLine($b, $c);
        }
        $discriminant = $this->discriminant($a, $b, $c);
        if($discriminant > 0) {
            MyLog::log('This is square equation');
            $squareDiscriminant = sqrt($discriminant);
            return $this->x = array((-$b + $squareDiscriminant) / (2 * $a), (-$b - $squareDiscriminant) / (2 * $a));
        }
        if($discriminant == 0) {
            return $this->x = array(-$b / (2 * $a));
        }
        if($discriminant < 0) {
           throw new AndreevException('The equation has no solution');
        }
        throw new AndreevException('No roots');
    }
}