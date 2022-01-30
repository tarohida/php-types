<?php
/** @noinspection NonAsciiCharacters */
/** @noinspection PhpUnhandledExceptionInspection */
/** @noinspection PhpDocMissingThrowsInspection */
/** @noinspection PhpPrivateFieldCanBeLocalVariableInspection */
declare(strict_types=1);

namespace Tests\TaroHida\Types;

use TaroHida\Types\Exception\PhpTypesInvalidArgumentException;
use TaroHida\Types\NotEmptyString;

use PHPUnit\Framework\TestCase;

class NotEmptyStringTest extends TestCase
{
    public function test_method_empty_string_not_acceptable_and_throws_InvalidArgumentException()
    {
        $this->expectException(PhpTypesInvalidArgumentException::class);
        new NotEmptyString('');
    }

    /**
     * @dataProvider notEmptyStringProvider
     * @dataProvider emojiProvider
     */
    public function test_method_getValue(string $input)
    {
        $string = new NotEmptyString($input);
        self::assertSame($input, $string->getValue());
    }

    public function notEmptyStringProvider(): array
    {
        return [
            ['string'],
            ['0'],
            ['false']
        ];
    }

    public function emojiProvider(): array
    {
        return [
            ['😀']
        ];
    }


}
