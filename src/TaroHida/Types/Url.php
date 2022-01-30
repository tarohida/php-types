<?php
declare(strict_types=1);

namespace TaroHida\Types;

use InvalidArgumentException;
use TaroHida\Types\Exception\PhpTypesInvalidArgumentException;

/*
 * (c) Claude Khedhiri <claude@khedhiri.com>
 * (c) Taro Hida <sk8trou@gmail.com>
 * originate from https://github.com/ck-developer/php-types/blob/c72f6fa0051a20552cfe7d5b88936ded2d2dc2f8/src/Url.php
 */
class Url
{
    /**
     * @var string
     */
    private string $value;

    /**
     * @param string $value
     * @throws PhpTypesInvalidArgumentException
     */
    public function __construct(string $value)
    {
        if (!self::isValid($value)) {
            throw new PhpTypesInvalidArgumentException("${value} is not a valid url");
        }
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return bool
     */
    public static function isValid(string $value): bool
    {
        return (bool)filter_var($value, FILTER_VALIDATE_URL);
    }

}