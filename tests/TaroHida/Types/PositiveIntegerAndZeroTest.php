<?php
/** @noinspection NonAsciiCharacters */
/** @noinspection PhpUnhandledExceptionInspection */
/** @noinspection PhpDocMissingThrowsInspection */
/** @noinspection PhpPrivateFieldCanBeLocalVariableInspection */
declare(strict_types=1);

namespace Tests\TaroHida\Types;

use PHPUnit\Framework\TestCase;
use TaroHida\Types\PositiveIntegerAndZero;

class PositiveIntegerAndZeroTest extends TestCase
{
    /**
     * @dataProvider zeroProvider
     * @dataProvider positiveValueProvider
     */
    public function test_accept_zero_and_positive_number(int $input)
    {
        $integer = new PositiveIntegerAndZero($input);
        self::assertSame($input, $integer->getValue());
    }

    public function zeroProvider(): array
    {
        return [
            [0]
        ];
    }

    public function positiveValueProvider(): array
    {
        return [
            [1],
            [1000],
            [100000]
        ];
    }
}
