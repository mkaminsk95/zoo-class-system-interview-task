<?php

declare(strict_types=1);

namespace Src\Animals;

abstract class OmnivorousAnimal extends Animal
{
    public function __construct(string $name, string $species)
    {
        parent::__construct($name, $species);
    }

    public function eat(string $food): void
    {
        if (in_array($food, ['meat', 'plant'])) {
            echo $this->name . __(" is eating " . $food) . PHP_EOL;
        } else {
            echo $this->name . __(' cannot eat this food.') . PHP_EOL;
        }
    }
}
