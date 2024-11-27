<?php

declare(strict_types=1);

namespace Src\Animals;

// Apparently, Kyoto's university research group discovered that they eat some plants (https://royalsocietypublishing.org/doi/10.1098/rsos.240132)
class SnowLeopard extends OmnivorousAnimal
{
    use CombFur;

    public function __construct(string $name)
    {
        parent::__construct($name, 'irbis śnieżny');
    }
}