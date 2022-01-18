<?php
declare(strict_types=1);

namespace TaroHida\Types;

use InvalidArgumentException;

class NotEmptyString
{
    private string $value;

    public function getValue(): string
    {
        return $this->value;
    }

    public function __construct(string $value)
    {
        // empty($value) は '0' が通らないので不採用
        if (strlen($value) <= 0) {
            throw new InvalidArgumentException("Given value is empty string and can not be accepted not empty string");
        }
        $this->value = $value;
    }
}