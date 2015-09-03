# Enum type

[![Latest Stable Version](https://poser.pugx.org/phpextra/enum/v/stable.svg)](https://packagist.org/packages/phpextra/enum)
[![Total Downloads](https://poser.pugx.org/phpextra/enum/downloads.svg)](https://packagist.org/packages/phpextra/enum)
[![License](https://poser.pugx.org/phpextra/enum/license.svg)](https://packagist.org/packages/phpextra/enum)
[![Build Status](http://img.shields.io/travis/phpextra/enum.svg)](https://travis-ci.org/phpextra/enum?branch=2.0)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/phpextra/enum/badges/quality-score.png?branch=2.0)](https://scrutinizer-ci.com/g/phpextra/enum/?branch=2.0)
[![Code Coverage](https://scrutinizer-ci.com/g/phpextra/enum/badges/coverage.png?branch=2.0)](https://scrutinizer-ci.com/g/phpextra/enum/?branch=2.0)

## Usage

### Enum (PHPExtra\Type\EnumInterface)

Create your first enum type by creating a new class:

```php
class TheGuy extends Enum
{
    protected $default = 'Rick';
    
    public function isValid($value)
    {
        return in_array($value, array('Mike', 'Rick'));
    }
}
```

That's all.

Now you can use it:

```php
$guy = new TheGuy();
echo $guy->getValue(); // returns Rick

$mike = new TheGuy('Mike');
echo $mike->getValue(); // returns Mike

echo $guy->equals($mike); // returns false
```

If given constructor value will be invalid, ``\UnexpectedValueException`` will be thrown.

## Installation (Composer)

```json
{
    "require": {
        "phpextra/enum":"^2.0"
    }
}
```

## Changelog

### 1.0

- first release

### 2.0-dev

- Enums now must implement Enum::isValid($value) method
- removed interface and unused abstract class
- added null object
- updated tests

## Contributing

All code contributions must go through a pull request.
Fork the project, create a feature branch, and send me a pull request.
To ensure a consistent code base, you should make sure the code follows
the [coding standards](http://symfony.com/doc/current/contributing/code/standards.html).
If you would like to help take a look at the **list of issues**.

## Requirements

See composer.json for a full list of dependencies.

## Authors

Jacek Kobus - <kobus.jacek@gmail.com>

## License information

See the file LICENSE for copying permission.