<?php

declare(strict_types=1);

namespace Src;

use Src\Animals\Animal;

class Zoo
{
    private array $animals = [];

    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    public function addAnimals(array $animals): void
    {
        foreach ($animals as $animal) {
            $this->addAnimal($animal);
        }
    }

    public function emptyZoo(): void
    {
        $this->animals = [];
    }

    public function showAnimals(): void
    {
        if (empty($this->animals)) {
            echo "Zoo jest puste.\n";
            return;
        }

        echo "Zwierzęta w zoo:\n";
        foreach ($this->animals as $animal) {
            echo $animal . "\n";
        }
    }
}