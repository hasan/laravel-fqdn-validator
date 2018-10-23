# laravel-fqdn-validator

Fqdn validator for laravel


### Installation

```bash
composer require chelebi/laravel-fqdn-validator
```
### Usage
```php
$rules = [
    'domain' => [
        'required',
        'fqdn'
    ]
];
```
