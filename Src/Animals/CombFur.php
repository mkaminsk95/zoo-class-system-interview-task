<?php

declare(strict_types=1);

namespace Src\Animals;

trait CombFur
{
    protected function combFur(): void
    {
        echo $this->name . " is being combed.\n";
    }
}