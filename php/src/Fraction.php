<?php declare(strict_types=1);

namespace Kata;

class Fraction
{
    private int $numerator;
    private int $denominator;

    public function __construct(int $numerator, int $denominator)
    {
        $this->numerator = $numerator;
        $this->denominator = $denominator;
    }

    public static function fromString(string $fraction): self
    {
        if (false === strpos($fraction, '{')) {
            throw new \Exception('invalid fraction');
        }

        $fraction = str_replace(['{','}'], '', $fraction);
        [$numerator, $denominator] = explode('/', $fraction);

        return new self((int)$numerator, (int)$denominator);
    }

    public function result(): float
    {
        return $this->numerator / $this->denominator;
    }
}
