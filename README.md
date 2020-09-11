# Distorted Fusion - Shared Coding Standard

[![Latest Version](https://img.shields.io/github/tag/distortedfusion/php-cs-fixer-config.svg?style=flat-square)](https://github.com/distortedfusion/php-cs-fixer-config/tags)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://github.com/distortedfusion/php-cs-fixer-config/blob/master/LICENSE)
[![Build Status](https://img.shields.io/travis/distortedfusion/php-cs-fixer-config.svg?style=flat-square)](https://travis-ci.org/distortedfusion/php-cs-fixer-config)

This is a shared [FriendsOfPHP/PHP-CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) configuration used in our packages.

## Installation

```bash
composer require --dev distortedfusion/php-cs-fixer-config
```

## Usage

Create a `.php_cs.dist` configuration file in the root of your project.

```php
<?php

$config = new DistortedFusion\PhpCsFixerConfig\Config();
$config->getFinder()
    ->in(__DIR__ . "/src")
    ->in(__DIR__ . "/tests");

return $config;
```

### Adding or overloading rules

Adding an array of rules to the construct of the Config object allows you to add or overload rules:

```php
<?php

$config = new DistortedFusion\PhpCsFixerConfig\Config([
    'declare_strict_types' => true,
]);
$config->getFinder()
    ->in(__DIR__ . "/src")
    ->in(__DIR__ . "/tests");

return $config;
```

### Composer scripts

By using composer scripts we can add some extra rules for testing. Adding psr0 and psr4 would always require the use of risky rules, instead we only want to use those during testing `$ composer phpcs` and when fixing the code `$ composer phpcs-fix` we omit these rules.

If you still want to apply these risky rules you can run php-cs-fixer manually: `$ /vendor/bin/php-cs-fixer fix --using-cache=no --allow-risky=yes --ansi`

```json
{
    ...
    "scripts": {
        "phpcs-fix" : "php-cs-fixer fix --using-cache=no --rules=-psr0,-psr4 --ansi",
        "phpcs": "php-cs-fixer fix -v --diff --dry-run --allow-risky=yes --ansi",
        "test": [
            "@phpcs"
        ]
    },
    "scripts-descriptions": {
        "phpcs": "Runs coding style test suite",
        "test": "Runs all tests"
    }
}
```

## Testing

To run the tests, run the following command from the project folder:

``` bash
$ composer test
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Kevin Dierkx via kevin@distortedfusion.com. All security vulnerabilities will be promptly addressed.

## Contributing

Contributions are welcome and will be [fully credited](https://github.com/distortedfusion/php-cs-fixer-config/graphs/contributors). Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
