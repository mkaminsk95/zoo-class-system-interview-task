<?php

declare(strict_types=1);

namespace Src\Animals;

abstract class Animal
{
    public function __construct(
        protected string $name,
        protected string $species
    ) {
    }

    public function __toString(): string
    {
        return __($this->species) . ' ' . $this->name;
    }
    public function getName(): string
    {
        return $this->name;
    }
}
