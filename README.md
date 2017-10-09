# intercom-laravel
Laravel 5.x Wrapper for Intercom API

## Installation

Using Composer:
```
composer require slaughter550/intercom-laravel
```

## Configuration

This package uses the Auth-Discovery feature in Laravel 5.5. For <5.5 use the following config:

config/app.php
```php
'providers' => [
    'Shadow\IntercomLaravel\ServiceProvider',
],
'aliases' => [
    'Intercom' => 'Shadow\IntercomLaravel\Facade',
],
```



config/services.php
```php
'intercom' => [
    'token' => 'tokenGoesHere'
],
```

## Usage
```php
// Create/update a user
Intercom::users()->create([
    'email' => 'test@intercom.io'
]);
```
