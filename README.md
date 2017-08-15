# intercom-laravel
Laravel 5.x Wrapper for Intercom API

## Installation

Using Composer:
```
composer require slaughter550/intercom-laravel
```

## Configuration
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
    'app_id' => 'appIdGoesHere',
    'api_key' => 'apiKeyGoesHere',
],
```

## Usage
```php
// Create/update a user
Intercom::users()->create([
    'email' => 'test@intercom.io'
]);
```
