<?php declare(strict_types=1);

namespace KataTests;

use Kata\Fraction;
use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase
{
    public function test_throws_exception_when_does_not_start_with_curly_bracket(): void
    {
        $this->expectExceptionMessage('invalid fraction');
        Fraction::fromString('1/1}');
    }

    public function test_can_create_fraction(): void
    {
        $fraction = Fraction::fromString('{1/1}');

        self::assertInstanceOf(Fraction::class, $fraction);
    }
}
