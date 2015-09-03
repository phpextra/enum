<?php

namespace PHPExtra\Type\Enum;

/**
 * The Enum type
 *
 * @author Jacek Kobus <kobus.jacek@gmail.com>
 */
abstract class Enum
{
    /**
     * @var string
     */
    private $value;

    /**
     * Default value for new enums
     *
     * @var mixed
     */
    protected $default = null;

    /**
     * @param string $value
     *
     * @throws \UnexpectedValueException
     */
    public function __construct($value = null)
    {
        if(!$value && $this->default !== null){
            $value = $this->default;
        }

        if(!is_scalar($value)){
            throw new \UnexpectedValueException(sprintf('Enum value must be scalar ("%s" given)', gettype($value)));
        }

        if(!$this->isValid($value)){
            throw new \UnexpectedValueException(sprintf('Unexpected value "(%s)%s"', gettype($value), $value));
        }

        $this->value = $value;
    }

    /**
     * Get scalar value
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Check if given value is valid for this enum
     *
     * @param mixed $value
     *
     * @return array
     */
    public abstract function isValid($value);

    /**
     * Tell if enums are equal
     *
     * @param Enum $enum
     *
     * @return bool
     */
    public function equals(Enum $enum)
    {
        return $this->getValue() === $enum->getValue();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getValue();
    }
}