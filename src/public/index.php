<?php

require_once __DIR__ . '/../vendor/autoload.php';

$obj = new class(1,2,3)  {


public function __construct(public int $x, public int $y, public  int $z)
{
}
};

