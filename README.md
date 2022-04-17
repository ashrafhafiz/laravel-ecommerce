
## Learning Laravel

## Project Installation
Create a new laravel project:
```
laravel new laravel-ecommerce

cd laravel-ecommerce
 
php artisan migrate
```
## Adding [Laravel Breeze](https://laravel.com/docs/9.x/starter-kits#laravel-breeze)
Laravel Breeze is a minimal, simple implementation of all of Laravel's authentication features, including login, registration, password reset, email verification, and password confirmation. Laravel Breeze's default view layer is made up of simple Blade templates styled with Tailwind CSS.

Breeze provides a wonderful starting point for beginning a fresh Laravel application and is also great choice for projects that plan to take their Blade templates to the next level with Laravel Livewire.

### Installation
```
composer require laravel/breeze --dev
```
After Composer has installed the Laravel Breeze package, you may run the breeze:install Artisan command.
```
php artisan breeze:install

npm install
npm run dev
php artisan migrate
```

## Adding [Laravel Livewire](https://laravel-livewire.com/)
### Installation
Livewire is a full-stack framework for Laravel that makes building dynamic interfaces simple, without leaving the comfort of Laravel.

Include the PHP.
```angular2svg
composer require livewire/livewire
```

Include the JavaScript (on every page that will be using Livewire).
```angular2html
...
@livewireStyles
</head>
<body>
    ...

    @livewireScripts
</body>
</html>
```
You can alternatively use the tag syntax.
```
<livewire:styles />
...
<livewire:scripts />
```
That's it! That's all you need to start using Livewire. Everything else on this page is optional.

## Other technologies used in this project:

### 1. [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar)
This is a package to integrate  [PHP Debug Bar](http://phpdebugbar.com/)  with Laravel. It includes a ServiceProvider to register the debugbar and attach it to the output. You can publish assets and configure it through Laravel. It bootstraps some Collectors to work with Laravel and implements a couple custom DataCollectors, specific for Laravel. It is configured to display Redirects and (jQuery) Ajax Requests. (Shown in a dropdown) Read  [the documentation](http://phpdebugbar.com/docs/)  for more configuration options.

[![Debugbar 3.3 Screenshot](https://user-images.githubusercontent.com/973269/79428890-196cc680-7fc7-11ea-8229-189f5eac9009.png)](https://user-images.githubusercontent.com/973269/79428890-196cc680-7fc7-11ea-8229-189f5eac9009.png)

Note: Use the DebugBar only in development. It can slow the application down (because it has to gather data). So when experiencing slowness, try disabling some of the collectors.

#### Installation

Require this package with composer. It is recommended to only require the package for development.
```
composer require barryvdh/laravel-debugbar --dev
```
Laravel uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

The Debugbar will be enabled when  `APP_DEBUG`  is  `true`.

### 2. [staudenmeir/laravel-adjacency-list](https://github.com/staudenmeir/laravel-adjacency-list)
This Laravel Eloquent extension provides recursive relationships using common table expressions (CTE).
#### Installation
```
composer require staudenmeir/laravel-adjacency-list:"^1.0"
```
#### Compatibility
-   MySQL 8.0+
-   MariaDB 10.2+
-   PostgreSQL 9.4+
-   SQLite 3.8.3+
-   SQL Server 2008+

### 3. [cknow/laravel-money](https://github.com/cknow/laravel-money)
### Laravel Money
#### Installation

Run the following command from you terminal:
```
composer require cknow/laravel-money
```
or add this to require section in your composer.json file:
```
"cknow/laravel-money": "~6.0"
```
then run  `composer update`

#### Usage
```
use Cknow\Money\Money;

echo Money::USD(500); // $5.00
```
#### Configuration

The defaults are set in  `config/money.php`. Copy this file to your own config directory to modify the values. You can publish the config using this command:
```
php artisan vendor:publish --provider="Cknow\Money\MoneyServiceProvider"
```
This is the contents of the published file:
```
return [
    /*
 |--------------------------------------------------------------------------
 | Laravel money
 |--------------------------------------------------------------------------
 */
    'locale' => config('app.locale', 'en_US'),
    'defaultCurrency' => config('app.currency', 'USD'),
    'defaultFormatter' => null,
    'currencies' => [
        'iso' => ['RUB', 'USD', 'EUR'],  // 'all' to choose all ISOCurrencies
        'bitcoin' => ['XBT'], // 'all' to choose all BitcoinCurrencies
        'custom' => [
            'MY1' => 2,
            'MY2' => 3
        ]
    ]
];
```
### 4.	[orangehill/iseed](https://github.com/orangehill/iseed)
**Inverse seed generator (iSeed)**  is a Laravel package that provides a method to generate a new seed file based on data from the existing database table.
### Installation

#### Require with  [Composer](https://getcomposer.org/)
```
composer require orangehill/iseed
```
#### Artisan command options

#### [](https://github.com/orangehill/iseed#table_name)[table_name]

Mandatory parameter which defines which table/s will be used for seed creation. Use CSV notation for multiple tables. Seed file will be generated for each table.

Examples:

```
php artisan iseed my_table
```

```
php artisan iseed my_table,another_table
```


## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [ashraf.hafiz@yahoo.com](mailto:ashraf.hafiz@yahoo.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
