# Notes

## Day 1

### Install Laravel installer

```bash
composer global require laravel/installer
```

### Create new Laravel project

```bash
laravel new training-laravel-basic-uis
```

> Jetstream, Livewire, None Features, Pest, Init Git, MySQL database.

### Server Laravel application via Artisan command

```bash
php artisan serve
```

### Route by Closure

```php
Route::get('/uri', function(){});
```

Return simple string:

```php
Route::get('/uri', function(){
    return 'hello world';
});
```

### Route by Controller

```bash
php artisan make:controller WelcomeController --invokable
```

in `routes/web.php`:

```php

use App\Http\Controllers\WelcomeController;

Route::get('welcome', WelcomeController::class);
```

Return simple string:

```php
public function __invoke(Request $request)
{
    return 'hello world';
}
```

Return view:

```php
public function __invoke(Request $request)
{
    return view('welcome');
}
```

All views are located in `resources/views` directory.

All views are with suffix `.blade.php`.
