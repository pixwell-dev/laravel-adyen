## Installation

This package can be used in Laravel 5.4 or higher.

You can install the package via composer:

``` bash
composer require pixwell-dev/laravel-adyen
```

Now add the service provider in `config/app.php` file:

```php
'providers' => [
    // ...
    Pixwell\LaravelAdyen\AdyenServiceProvider::class,
];
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="Pixwell\LaravelAdyen\AdyenServiceProvider" --tag="config"
```

### Usage

Once setup, you can use the Adyen PHP classes as spelled out in the [documentation](https://docs.adyen.com/developers/api-reference).
