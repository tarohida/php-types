<?php
declare(strict_types=1);

namespace TaroHida\Types;

use InvalidArgumentException;
use zen\types\PositiveInteger;

class PositiveIntegerAndZero
{
    private int $value;

    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function __construct(int $value)
    {
        if ($value === 0) {
            $this->value = 0;
            return;
        }
        $integer = new PositiveInteger($value);
        $this->value = $integer->value();
    }
}