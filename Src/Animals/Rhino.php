<?php

declare(strict_types=1);

namespace Src\Animals;

class Rhino extends HerbivorousAnimal
{
    public function __construct($name)
    {
        parent::__construct($name, 'Rhino');
    }
}