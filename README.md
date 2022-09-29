# Weight conversions in php

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mohammedalbalaawi/weight-package.svg?style=flat-square)](https://packagist.org/packages/mohammedalbalaawi/weight-package)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/mohammedalbalaawi/weight-package/run-tests?label=tests)](https://github.com/mohammedalbalaawi/weight-package/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/mohammedalbalaawi/weight-package/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/mohammedalbalaawi/weight-package/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mohammedalbalaawi/weight-package.svg?style=flat-square)](https://packagist.org/packages/mohammedalbalaawi/weight-package)

## Installation

You can install the package via composer:

```bash
composer require mohammedalbalaawi/weight-package
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="weight-package-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="weight-package-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="weight-package-views"
```

## Usage

```php
$weightPackage = new MohammedAlbalaawi\WeightPackage();
echo $weightPackage->echoPhrase('Hello, MohammedAlbalaawi!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Mohammed Albalaawi](https://github.com/MohammedAlbalaawi)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
