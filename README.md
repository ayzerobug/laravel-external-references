# This is my package laravel-external-references

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ayzerobug/laravel-external-references.svg?style=flat-square)](https://packagist.org/packages/ayzerobug/laravel-external-references)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ayzerobug/laravel-external-references/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ayzerobug/laravel-external-references/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ayzerobug/laravel-external-references/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ayzerobug/laravel-external-references/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ayzerobug/laravel-external-references.svg?style=flat-square)](https://packagist.org/packages/ayzerobug/laravel-external-references)

This package helps you connect your Laravel Models to other external systems or services by storing external references or IDs. It makes it easy to link your app's data to external data, like payment processor IDs or user accounts. This helps you integrate your app with other services and systems, making it more powerful and flexible.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-external-references.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-external-references)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require ayzerobug/laravel-external-references
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-external-references-migrations"
php artisan migrate
```

<!-- You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-external-references-config"
```

This is the contents of the published config file:

```php
return [
];
``` -->

<!-- Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-external-references-views"
``` -->

## Usage

```php
$laravelExternalReferences = new Ayzerobug\LaravelExternalReferences();
echo $laravelExternalReferences->echoPhrase('Hello, Ayzerobug!');
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

- [Ayomide Micheal](https://github.com/Ayzerobug)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
