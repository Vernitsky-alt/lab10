<?php

use andreev\LineEq;
use andreev\SquareEq;

ini_set("display_errors", 1);
error_reporting(-1);

require_once('core\EquationInterface.php');
require_once('core\LogInterface.php');
require_once('core\LogAbstract.php');

require_once('andreev\LineEq.php');
require_once('andreev\SquareEq.php');

$a = new LineEq();
$b = new SquareEq();
var_dump($a->solveLine(10,5));
var_dump($b->solve(10,5,3));