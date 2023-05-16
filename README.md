# Entree ARP service

[![Latest Version on Packagist](https://img.shields.io/packagist/v/learnkit/entree-arp-service.svg?style=flat-square)](https://packagist.org/packages/learnkit/entree-arp-service)
[![Total Downloads](https://img.shields.io/packagist/dt/learnkit/entree-arp-service.svg?style=flat-square)](https://packagist.org/packages/learnkit/entree-arp-service)

This package is a convienent client for the [Entree ARP service](https://developers.wiki.kennisnet.nl/index.php?title=KNF:ARP_service).

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
