<?php

declare(strict_types=1);

namespace Src\Animals;

class Elephant extends HerbivorousAnimal
{
    public function __construct(string $name)
    {
        parent::__construct($name, 'słoń');
    }
}
