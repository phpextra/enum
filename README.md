#Enum type

[![Latest Stable Version](https://poser.pugx.org/phpextra/enum/v/stable.svg)](https://packagist.org/packages/phpextra/enum)
[![Total Downloads](https://poser.pugx.org/phpextra/enum/downloads.svg)](https://packagist.org/packages/phpextra/enum)
[![License](https://poser.pugx.org/phpextra/enum/license.svg)](https://packagist.org/packages/phpextra/enum)
[![Build Status](http://img.shields.io/travis/phpextra/enum.svg)](https://travis-ci.org/phpextra/enum)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/phpextra/enum/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/phpextra/enum/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/phpextra/enum/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/phpextra/enum/?branch=master)
[![GitTip](http://img.shields.io/gittip/jkobus.svg)](https://www.gittip.com/jkobus)

##Usage

###Enum (PHPExtra\Type\EnumInterface)

Create your first enum type by creating a new class:

```php
class TheGuy extends Enum
{
    const _default = self::NICE_GUY;
    const SMART_GUY = 'Mike';
    const NICE_GUY = 'Rick';
}
```

Thats all.

Now you can use it:

```php
$guy = new TheGuy();
echo $guy->getValue(); // returns Rick

$mike = new TheGuy(TheGuy::MIKE);
echo $mike->getValue(); // returns Mike

echo $guy->isEqual($mike); // returns false
```

If no default value will be specified, you must set it as a constructor argument.
If given constructor value will be invalid, ``\UnexpectedValueException`` will be thrown.

## Installation (Composer)

```json
{
    "require": {
        "phpextra/enum":"~1.0"
    }
}
```

##Changelog

    No releases yet

##Contributing

All code contributions must go through a pull request.
Fork the project, create a feature branch, and send me a pull request.
To ensure a consistent code base, you should make sure the code follows
the [coding standards](http://symfony.com/doc/2.0/contributing/code/standards.html).
If you would like to help take a look at the **list of issues**.

##Requirements

    See composer.json for a full list of dependencies.

##Authors

    Jacek Kobus - <kobus.jacek@gmail.com>

## License information

    See the file LICENSE.txt for copying permission.