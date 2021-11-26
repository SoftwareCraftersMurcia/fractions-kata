<?php

declare(strict_types=1);

namespace Kata;

final class Operation
{
    /** @var list<Fraction>  */
    private array $fractions;

    public function __construct(Fraction ...$fractions)
    {
        $this->fractions = $fractions;
    }

    public static function fromString(string $operation): self
    {
        return new self(Fraction::fromString($operation));
    }

    public function result(): float
    {
        return $this->fractions[0]->result();
    }
}
