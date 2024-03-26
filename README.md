# EventNex Backend Services and APIs Project

This project uses Next Laravel Code Architecture. Please learn the documentation for understanding fundamental of concept and artisan commands.

[Next Laravel Architecture](https://next-laravel.netlify.app/)

## Getting started

This initial codebase already developed core module:

-   Authentication with Laravel Sanctum: Login, Logout
-   Profile Retrieve and Update
-   Authorization using Roles & Abilities: Create Role and attach Abilities, Update Role with Abilities, Authorize Middleware
-   User Index, Create, Read, Update, and Delete
-   Helpers and Utilities

## Setup

```
cp .env.example .env #Don't forget to configure your .env file
composer install

php artisan key:generate
php artisan migrate
php artisan db:seed

npm install

```

## Linting

husky will automatically run pint when running "git commit"

install and configure husky as follow:

```
composer install
npx husky install
```


## Telescope Tweak for Single Database
- Create telescope database connection in config/database.php
```
        'telescope' => [
            'driver' => 'mysql',
            'host' => env('TELESCOPE_DB_HOST', '127.0.0.1'),
            'port' => env('TELESCOPE_DB_PORT', '3306'),
            'database' => env('TELESCOPE_DB_DATABASE', 'telescope'),
            'username' => env('TELESCOPE_DB_USERNAME', 'your_username'),
            'password' => env('TELESCOPE_DB_PASSWORD', 'your_password'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
```

- Publish telescope migrations
```
php artisan telescope:publish --tag=telescope-migrations
```

- Running telescope migrations only
```
php artisan migrate --database=telescope --path=/database/migrations/2018_08_08_100000_create_telescope_entries_table.php
```