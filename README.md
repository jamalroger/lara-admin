# Integrate phpmyadmin in laravel project
This package can automatically intergrate phpmyadmin into laravel project,will copy phpmyadmin to public directory

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

### open phpmyadmin

the package will create phpmyadmin folder in public folder

```bash
 http://{laravel_project_url}/phpmyadmin

```

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
