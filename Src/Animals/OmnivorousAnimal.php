<?php

declare(strict_types=1);

namespace Src\Animals;

abstract class OmnivorousAnimal extends Animal
{
    public function __construct($name, $species)
    {
        parent::__construct($name, $species);
    }

    public function eat($food): void
    {
        if (in_array($food, ['meat', 'plant'])) {
            echo $this->name . " is eating " . $food . ".\n";
        } else {
            echo $this->name . " cannot eat this food.\n";
        }
    }
}