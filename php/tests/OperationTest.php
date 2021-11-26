<?php

declare(strict_types=1);

namespace KataTests;

use Kata\Operation;
use PHPUnit\Framework\TestCase;

final class OperationTest extends TestCase
{
    /**
     * @dataProvider simpleFunctions
     */
    public function test_can_create(float $expectedResult, string $operation): void
    {
        $operation = Operation::fromString($operation);

        self::assertSame($expectedResult, $operation->result());
    }

    public function simpleFunctions()
    {
        return [
            [2.0, '{4/2}'],
        ];
    }
}
