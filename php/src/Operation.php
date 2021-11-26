<?php

declare(strict_types=1);

namespace Kata;

final class Operation
{
    /** @var list<Fraction> */
    private array $fractions;
    private string $operations;

    public function __construct(string $operations, Fraction ...$fractions)
    {
        $this->operations = $operations;
        $this->fractions = $fractions;
    }

    public static function fromString(string $operation): self
    {
        $fractionsString = preg_split('/[\+-]/', $operation);

        $operations = str_replace($fractionsString, '', $operation);
        $operations = '+'.$operations;

        /** @var list<Fraction> $fractions */
        $fractions = array_map(
            fn(string $f) => Fraction::fromString($f),
            $fractionsString
        );

        return new self($operations, ...$fractions);
    }

    public function result(): float
    {
        $result = 0;
        foreach ($this->fractions as $i => $fraction) {
            $mathOperation = $this->operations[$i] ?? '+';

            $result = eval("return $result $mathOperation {$fraction->result()};");
        }

        return $result;
    }
}
