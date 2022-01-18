<?php
declare(strict_types=1);

namespace Tests;

class TestCase extends \PHPUnit\Framework\TestCase
{

    public function positiveIntegerValueProvider(): array
    {
        return [
            [1],
            [1000],
            [100000]
        ];
    }
}