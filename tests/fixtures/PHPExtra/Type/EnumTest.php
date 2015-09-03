<?php

use PHPExtraTest\Type\Enum\TestEnum;

include_once __DIR__ . '/TestEnum.php';

/**
 * EnumTest
 *
 * @author Jacek Kobus <kobus.jacek@gmail.com>
 */
class EnumTest extends PHPUnit_Framework_TestCase
{
    public function testCreateEnumReturnsEnumWithValidValue()
    {
        $enum = new TestEnum('one');
        $this->assertEquals('one', $enum->getValue());
    }

    /**
     * @expectedException UnexpectedValueException
     */
    public function testCreateEnumWithInvalidValueThrowsException()
    {
        new TestEnum(15);
    }

    public function testCreateEnumWithoutConstructorArgWillUseDefaultEnumValue()
    {
        $enum = new TestEnum();
        $this->assertEquals('two', $enum->getValue());
    }

    /**
     * @expectedException UnexpectedValueException
     */
    public function testCreateEnumUsingNonScalarValueThrowsException()
    {
        new TestEnum(new stdClass());
    }

    public function testEnumCanBeConvertedToString()
    {
        $enum = new TestEnum();
        $this->assertSame('two', (string)$enum);
    }
}
 