<?php

namespace PHPExtra\Type\Enum;

/**
 * The NullEnum
 *
 * @author Jacek Kobus <kobus.jacek@gmail.com>
 */
class NullEnum extends Enum
{
    public function __construct()
    {
    }

    public function isValid($value)
    {
    }
}