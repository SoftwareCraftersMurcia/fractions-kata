<?php declare(strict_types=1);

namespace Kata;

class Fraction
{
    public static function fromString(string $fraction): self
    {
        throw new \Exception('invalid fraction');
    }
}
