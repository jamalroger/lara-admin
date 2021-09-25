# Integrate phpmyadmin in laravel project

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jamalroger/laraadmin.svg?style=flat-square)](https://packagist.org/packages/jamalroger/laraadmin)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

![Code Style Status](https://img.shields.io/github/workflow/status/jamalroger/lara-admin/Check%20&%20fix%20styling?label=code%20style)

[![Total Downloads](https://img.shields.io/packagist/dt/jamalroger/laraadmin.svg?style=flat-square)](https://packagist.org/packages/jamalroger/laraadmin)

This package can automaclly intergrate phpmyadmin into laravel project,will copy phpmyadmin to public directory

## Requirements

- shell access

The package will automatically register itself.

## Installation

First, install unzip & wget :

```bash
   sudo apt install unzip -y
   sudo apt install  wget -y
```

Install the package via composer:

```bash
composer require jamalroger/laraadmin
```

The package will automatically register itself.

### Integrate phpmyadmin

The easiest way to integrate phpmyadmin by artisan command

```bash
php artisan phpmyadmin:install
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
