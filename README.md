<img src="https://banners.beyondco.de/Laravel%20External%20References.png?theme=dark&packageManager=composer+require&packageName=ayzerobug%2Flaravel-external-references&pattern=plus&style=style_1&description=Easily+link+Laravel+Models+with+external+data+for+seamless+integration+and+enhanced+functionality.&md=1&showWatermark=0&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg"/>




# Manage External References in Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ayzerobug/laravel-external-references.svg?style=flat-square)](https://packagist.org/packages/ayzerobug/laravel-external-references)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ayzerobug/laravel-external-references/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ayzerobug/laravel-external-references/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ayzerobug/laravel-external-references/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ayzerobug/laravel-external-references/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ayzerobug/laravel-external-references.svg?style=flat-square)](https://packagist.org/packages/ayzerobug/laravel-external-references)

This package facilitates the seamless integration of your Laravel Models with external systems or services by managing external references or identifiers. It streamlines the process of associating your application's data with external datasets, such as payment processor IDs or user accounts. This enhancement enables the smooth integration of your application with diverse services and systems, thereby augmenting its capabilities and adaptability.

## Installation

You can install the package via composer:

```bash
composer require ayzerobug/laravel-external-references
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="external-references-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="external-references-config"
```

<!-- Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-external-references-views"
``` -->

## Usage

Include the HasExternalReferences trait in your model:

```php
namespace App\Models;

use Ayzerobug\LaravelExternalReferences\Traits\HasExternalReferences;

class Payment extends Model
{
    use HasExternalReferences;

    ...
}

```

Set Payment External Reference:

```php
use App\Models\Payment;

$payment = Payment::find($id);
$idOnPaystack = "random-id";
$payment->setExternalReference($idOnPaystack, 'paystack');
```

Get the external Reference

```php
use App\Models\Payment;

$payment = Payment::find($id);
$idOnPaystack = $payment->getExternalReference('paystack');
```

Get Payment with the external Reference

```php
use App\Models\Payment;

$idOnPaystack = "random-id";
$payment = Payment::findByExternalReference($idOnPaystack, 'paystack');
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ayomide Micheal](https://github.com/ayzerobug)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
