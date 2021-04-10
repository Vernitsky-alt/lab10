<?php

namespace andreev;

Class LineEq {
    protected $x;

    public function solveLine ($a,$b) {
        if ($a == 0) {
          throw new AndreevException('No roots');
        }
        MyLog::log('This is line equation');
        return $this->x = array(-$b / $a);
    }
}