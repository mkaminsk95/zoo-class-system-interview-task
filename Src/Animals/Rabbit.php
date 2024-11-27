<?php

declare(strict_types=1);

namespace Src\Animals;

class Rabbit extends HerbivorousAnimal
{
    use CombFur;

    public function __construct(string $name)
    {
        parent::__construct($name, 'Rabbit');
    }
}
