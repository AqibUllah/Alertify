# Laravel Alertify Alert
![alt text](https://raw.githubusercontent.com/AqibUllah/Alertify/master/src/public/assets/img.png)

This package provides a way of easy alerts for the UI of your app.

extra thing [Animation](https://animate.style) animate the alerts.

## Installation

```
composer require alertify/alert "~1.0.0"
```
***now publishing the provider Alertify\Alert\AlertifyServiceProvider***
```
php artisan vendor:publish
php artisan vendor:publish --tag=public --force
```

Laravel should be able to automatically detect the package and include it.

You should also make sure you have appropriately installed [Animate.css](https://animate.style) into your apps UI.

## Quick Start

Add service provider into your **config/app.php** file
```php
    \Alertify\Alert\AlertifyServiceProvider::class
```

### Blade
**head**
```php
<link rel="stylesheet" href="{{ asset('vendor/alertify/assets/css/alertify.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/alertify/assets/css/animate.min.css') }}">
```
**before body end tag**
```php
<script type="text/javascript" src="{{ asset('vendor/alertify/assets/js/alert.js') }}"></script>
```
**for success**
```php
<x-Alertify::success title="Success" body="your body here" />
```
**for warning**
```php
<x-Alertify::warning title="Warning" body="your body here" />
```

**for danger**
```php
<x-Alertify::danger title="Error" body="your body here" />
```

**for info**
```php
<x-Alertify::info title="Info" body="your body here" />
```
