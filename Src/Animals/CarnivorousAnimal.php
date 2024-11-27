<?php

declare(strict_types=1);

namespace Src\Animals;

abstract class CarnivorousAnimal extends Animal
{
    public function __construct(string $name, string $species)
    {
        parent::__construct($name, $species);
    }

    public function eat(string $food): void
    {
        if ($food === 'meat') {
            echo $this->name . __(' is eating meat.') . PHP_EOL;
        } else {
            echo $this->name . __(' cannot eat this food.') . PHP_EOL;
        }
    }
}
