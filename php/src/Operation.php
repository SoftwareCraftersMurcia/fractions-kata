<?php

declare(strict_types=1);

namespace Kata;

final class Operation
{
    private Fraction $fraction;

    public function __construct(Fraction $fraction)
    {

        $this->fraction = $fraction;
    }
    public static function fromString(string $operation): self
    {
        return new self(Fraction::fromString($operation));
    }

    public function result(): float
    {
        return $this->fraction->result();
    }
}
