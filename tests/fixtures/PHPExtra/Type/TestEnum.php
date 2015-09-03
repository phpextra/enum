<?php

namespace PHPExtraTest\Type\Enum;

use PHPExtra\Type\Enum\Enum;

class TestEnum extends Enum
{
    protected $default = 'two';

    public function isValid($value)
    {
        return in_array($value, array('one', 'two', 'three'));
    }
}