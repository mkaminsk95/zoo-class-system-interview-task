<?php

declare(strict_types=1);

namespace Src\Animals;

class Tiger extends CarnivorousAnimal
{
    use CombFur;

    public function __construct(string $name)
    {
        parent::__construct($name, 'tygrys');
    }
}
