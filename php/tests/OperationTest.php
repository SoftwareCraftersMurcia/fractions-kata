<?php

declare(strict_types=1);

namespace KataTests;

use Kata\Operation;
use PHPUnit\Framework\TestCase;

final class OperationTest extends TestCase
{
    public function test_can_create(): void
    {
        $operation = Operation::fromString('{4/2}');

        self::assertSame(2.0, $operation->result());
    }
}
