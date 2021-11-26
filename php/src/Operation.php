<?php

declare(strict_types=1);

namespace Kata;

final class Operation
{
    /** @var list<Fraction> */
    private array $fractions;

    public function __construct(Fraction ...$fractions)
    {
        $this->fractions = $fractions;
    }

    public static function fromString(string $operation): self
    {
        $fractionsString = explode('+', $operation);

        /** @var list<Fraction> $fractions */
        $fractions = array_map(
            fn(string $f) => Fraction::fromString($f),
            $fractionsString
        );

        return new self(...$fractions);
    }

    public function result(): float
    {
        $result = 0;
        foreach ($this->fractions as $fraction) {
            $result += $fraction->result();
        }

        return $result;
    }
}
