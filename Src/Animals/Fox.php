<?php

declare(strict_types=1);

namespace Src\Animals;

class Fox extends OmnivorousAnimal
{
    use CombFur;

    public function __construct(string $name)
    {
        parent::__construct($name, 'lis');
    }
}
