<?php

declare(strict_types=1);

namespace Src\Animals;

abstract class HerbivorousAnimal extends Animal
{
    public function __construct(string $name, string $species)
    {
        parent::__construct($name, $species);
    }

    public function eat(string $food): void
    {
        if ($food === 'plant') {
            echo $this->name . " is eating plant.\n";
        } else {
            echo $this->name . " cannot eat this food.\n";
        }
    }
}