<?php
declare(strict_types=1);

namespace TaroHida\Types;

use InvalidArgumentException;

class PositiveInteger
{
    private \zen\types\PositiveInteger $positive_integer;

    /**
     * @param int $value
     * @throws InvalidArgumentException
     */
    public function __construct(int $value)
    {
        $this->positive_integer = new \zen\types\PositiveInteger($value);
    }

    public function getValue(): int
    {
        return $this->positive_integer->value();
    }
}