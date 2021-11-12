# This is my package entree-arp-service

[![Latest Version on Packagist](https://img.shields.io/packagist/v/learnkit-dev/entree-arp-service.svg?style=flat-square)](https://packagist.org/packages/learnkit/entree-arp-service)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/learnkit-dev/entree-arp-service/run-tests?label=tests)](https://github.com/learnkit/entree-arp-service/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/learnkit-dev/entree-arp-service/Check%20&%20fix%20styling?label=code%20style)](https://github.com/learnkit/entree-arp-service/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/learnkit-dev/entree-arp-service.svg?style=flat-square)](https://packagist.org/packages/learnkit/entree-arp-service)

---
## Installation

You can install the package via composer:

```bash
composer require learnkit/entree-arp-service
```

You can publish the config file with:
```bash
php artisan vendor:publish --tag="entree-arp-service"
```

## Usage

```php
$service = new LearnKit\EntreeArpService\EntreeArpService();

// Return a collection of schools
$service->schoolList();

// Return a collection of SPs
$service->spList();
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Sebastiaan Kloos (Codecycler)](https://github.com/sebastiaankloos)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

---
*Sponsored by [Codecycler](https://codecycler.dev?ref=package-learnkit_entree-arp-service)*
