<?php
declare(strict_types=1);

namespace TaroHida\Types;

use InvalidArgumentException;
use TaroHida\Types\Exception\PhpTypesInvalidArgumentException;

class PositiveInteger
{
    private \zen\types\PositiveInteger $positive_integer;

    /**
     * @param int $value
     * @throws PhpTypesInvalidArgumentException
     */
    public function __construct(int $value)
    {
        try {
            $this->positive_integer = new \zen\types\PositiveInteger($value);
        } catch (InvalidArgumentException $e) {
            throw new PhpTypesInvalidArgumentException('', 0, $e);
        }
    }

    public function getValue(): int
    {
        return $this->positive_integer->value();
    }
}