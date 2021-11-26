<?php

declare(strict_types=1);

namespace KataTests;

use Kata\Operation;
use PHPUnit\Framework\TestCase;

final class OperationTest extends TestCase
{
    /**
     * @dataProvider simpleFunctions
     * @dataProvider complexFunctions
     */
    public function test_can_run_operations(float $expectedResult, string $operation): void
    {
        $operation = Operation::fromString($operation);

        self::assertSame($expectedResult, $operation->result());
    }

    public function simpleFunctions(): iterable
    {
        yield [2.0, '{4/2}'];
        yield [1.0, '{2/2}'];
    }

    public function complexFunctions(): iterable
    {
        yield [2.5, '{4/2}+{1/2}'];
//        yield [0.5, '{1/1}-{1/2}'];
    }
}
