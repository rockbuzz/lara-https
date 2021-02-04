# Lara Https

Configure https when needed.

## Requirements

PHP >=7.2

## Install

```bash
$ composer require rockbuzz/lara-https
```

## Configuration

```bash
$ php artisan vendor:publish --provider="Rockbuzz\LaraHttps\ServiceProvider" --tag="config"
```

## Usage
### In App\Http\Kernel
```php
protected $middleware = [
        \Rockbuzz\LaraHttps\ForceSSL::class,
        ...
    ];
```

## License

The Lara Https is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).