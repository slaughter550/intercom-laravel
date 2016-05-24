# intercom-laravel
Laravel 5.x Wrapper for Intercom API

## Installation

Using Composer:
```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/slaughter550/intercom-laravel"
        }
    ],
    "require": {
      "slaughter550/intercom-laravel": "~1.1"
    }
}
```

## Configuration
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
