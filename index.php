<?php

class A
{

}

class B extends A
{
    public function __construct($a, $b)
    {
        $this->a = $a;
		$this->b = $b;
    }
    protected $b;
    protected $a;
}

class C extends B
{
    public function __construct($a, $b, $c)
    {
        $this->c = $c;
        parent::__construct($a, $b);
    }
    protected $c;

}


$a1 = new A();
$a2 = new A();
$a3 = new A();
$a4 = new A();
$b5 = new B($a3, $a4);
$c6 = new C($a1, $a2, $b5);
var_dump($c6);