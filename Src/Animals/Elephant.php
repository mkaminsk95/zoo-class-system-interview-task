<?php

declare(strict_types=1);

namespace Src\Animals;

class Elephant extends HerbivorousAnimal
{
    public function __construct($name)
    {
        parent::__construct($name, 'słoń');
    }
}