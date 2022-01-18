<?php
/** @noinspection NonAsciiCharacters */
/** @noinspection PhpUnhandledExceptionInspection */
/** @noinspection PhpDocMissingThrowsInspection */
/** @noinspection PhpPrivateFieldCanBeLocalVariableInspection */
declare(strict_types=1);

namespace Tests\TaroHida\Types;

use TaroHida\Types\PositiveInteger;
use Tests\TestCase;

class PositiveIntegerTest extends TestCase
{
    /**
     * @dataProvider positiveIntegerValueProvider
     */
    public function test_accept_positive_number(int $input)
    {
        $integer = new PositiveInteger($input);
        self::assertSame($input, $integer->getValue());
    }
}
