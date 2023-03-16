# Review / Comments

[![Latest Version on Packagist](https://img.shields.io/packagist/v/hexatex/laravel-review.svg?style=flat-square)](https://packagist.org/packages/hexatex/laravel-review)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/hexatex/laravel-review/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/hexatex/laravel-review/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/hexatex/laravel-review/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/hexatex/laravel-review/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/hexatex/laravel-review.svg?style=flat-square)](https://packagist.org/packages/hexatex/laravel-review)

This  package provides functionality to add reviews to your models. The Review model can be used as a comment model if ratings are disabled in the config file.

## Installation

You can install the package via composer:

```bash
composer require hexatex/laravel-review
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="review-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="review-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="review-views"
```

## Usage

```php
$review = new Hexatex\LaravelReview();
echo $review->echoPhrase('Hello, Hexatex!');
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

- [Cory Baumer](https://github.com/hexatex)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
