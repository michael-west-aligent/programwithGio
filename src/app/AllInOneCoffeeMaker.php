<?php

namespace App;

//class AllInOneCoffeeMaker extends Coffeemaker implements MakesLatte, MakesCappuccino
class AllInOneCoffeeMaker extends Coffeemaker
{
    use CappuccinoTrait;
    use LatteTrait;
}