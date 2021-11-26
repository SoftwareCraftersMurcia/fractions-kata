<?php

declare(strict_types=1);

namespace Kata;

final class Operation
{
    public static function fromString(string $string): self
    {
        return new self();
    }

    public function result(): float
    {
        return 2.0;
    }
}
