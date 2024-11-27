<?php

declare(strict_types=1);

namespace Src\Animals;

class Rhino extends HerbivorousAnimal
{
    public function __construct(string $name)
    {
        parent::__construct($name, 'nosorożec');
    }
}