<?php
/** @noinspection NonAsciiCharacters */
/** @noinspection PhpUnhandledExceptionInspection */
/** @noinspection PhpDocMissingThrowsInspection */
/** @noinspection PhpPrivateFieldCanBeLocalVariableInspection */
declare(strict_types=1);

namespace Tests\TaroHida\Types;

use TaroHida\Types\PositiveIntegerAndZero;
use Tests\TestCase;

class PositiveIntegerAndZeroTest extends TestCase
{
    /**
     * @dataProvider zeroValueProvider
     * @dataProvider positiveIntegerValueProvider
     */
    public function test_accept_zero_and_positive_number(int $input)
    {
        $integer = new PositiveIntegerAndZero($input);
        self::assertSame($input, $integer->getValue());
    }

    public function zeroValueProvider(): array
    {
        return [
            [0]
        ];
    }

}
