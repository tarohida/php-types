<?php
/** @noinspection HttpUrlsUsage */
/** @noinspection NonAsciiCharacters */
/** @noinspection PhpUnhandledExceptionInspection */
/** @noinspection PhpDocMissingThrowsInspection */
/** @noinspection PhpPrivateFieldCanBeLocalVariableInspection */
/** @noinspection PhpUnhandledExceptionInspection */
declare(strict_types=1);

namespace Tests\TaroHida\Types;

use PHPUnit\Framework\TestCase;
use TaroHida\Types\Exception\PhpTypesInvalidArgumentException;
use TaroHida\Types\Url;

/*
 * (c) Claude Khedhiri <claude@khedhiri.com>
 * (c) Taro Hida <sk8trou@gmail.com>
 * originate from https://github.com/ck-developer/php-types/blob/c72f6fa0051a20552cfe7d5b88936ded2d2dc2f8/tests/UrlTest.php
 */
final class UrlTest extends TestCase
{
    /**
     * @param string $url
     *
     * @dataProvider validValues
     */
    public function testValid(string $url)
    {
        $this->assertSame($url, (new Url($url))->getValue());
    }

    /**
     * @param string $url
     *
     * @dataProvider invalidValues
     */
    public function testInvalid(string $url)
    {
        $this->expectException(PhpTypesInvalidArgumentException::class);

        new Url($url);
    }

    public function validValues(): array
    {
        return [
            ['http://localhost'],
            ['http://example.com'],
            ['https://example.com'],
        ];
    }

    public function invalidValues(): array
    {
        return [
            [''],
            ['localhost'],
            ['http://'],
        ];
    }
}

