# Distorted Fusion - Shared Coding Standard

[![Latest Version](https://img.shields.io/github/tag/distortedfusion/php-cs-fixer-config.svg?style=flat-square)](https://github.com/distortedfusion/php-cs-fixer-config/tags)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://github.com/distortedfusion/php-cs-fixer-config/blob/master/LICENSE)
[![Build Status](https://img.shields.io/github/workflow/status/distortedfusion/php-cs-fixer-config/CI-CD.svg?style=flat-square)](https://github.com/distortedfusion/php-cs-fixer-config/actions)

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
    'psr0' => false,
    'psr4' => false,
]);
$config->getFinder()
    ->in(__DIR__ . "/src")
    ->in(__DIR__ . "/tests");

return $config;
```

### Composer scripts

Adding composer scripts makes it easy to add aliases for testing and fixing code styling.

*Please Note:* The config contains risky rules by default, this requires the usage of `--allow-risky=yes`. If you don't want to run risky rules you can excluded them in the `.php-cs.dist` config.

```json
{
    ...
    "scripts": {
        "phpcs-fix" : "php-cs-fixer fix --using-cache=no --allow-risky=yes --ansi",
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
