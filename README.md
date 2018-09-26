
[![Total Downloads](https://poser.pugx.org/boolfalse/clearcaches/downloads)](https://packagist.org/packages/boolfalse/clearcaches)
[![License](https://poser.pugx.org/boolfalse/clearcaches/license)](https://packagist.org/packages/boolfalse/clearcaches)


Package for clearing/recreating all Laravel caches, and for dropping all DB tables. It's a package created for easy development.
This package is my first created package. So I will glad to hear any advices and suggestions.

## Package Installation:

Require this package with composer. It is recommended to only require the package for development.

```shell
composer require boolfalse/clearcaches --dev
```

For Laravel 5.4 and lower versions need to add service provider in config/app.php (or in config.php) to "providers" list array:
```shell
Boolfalse\ClearCaches\ClearCachesServiceProvider::class,
```
For Laravel 5.5 and higher Package have Auto-Discovery functionality, so doesn't require you to manually add the ServiceProvider.


## Usage:

Clear all Laravel Caches and Dump Autoload:
```shell
php artisan clearcaches
```
With CLI option 'dump' You can prevent Autoload Dumping:
```shell
php artisan --dump='no'
```
Drop all tables from DB:
```shell
php artisan droptables
```

 - For index page: your-domain/dev/clearcaches-check
 - For clearing and recreating caches: your-domain/dev/clearcaches
 - For dropping all DB tables: your-domain/dev/droptables


## Update the package:

This command will update this specific package:
```shell
composer update boolfalse/clearcaches
```
Or
```shell
composer update boolfalse/clearcaches --lock
```

For updating all existing packages, just run:
```shell
composer update
```

## Remove the package:
NOTE: For Laravel 5.4 and lower versions (for avoid terminal errors) before running command You need to firstly manually remove
```shell
Boolfalse\ClearCaches\ClearCachesServiceProvider::class,
```
service provider from "providers" list array in config/app.php (or in config.php).
```shell
composer remove boolfalse/clearcaches
```
And after that open '/dev/clearcaches' pages for clearing providers config caches;
or just run this commands:
```shell
php artisan cache:clear
php artisan config:cache
```

## Publishing the package index view:

Available for ^1.0 version
```shell
php artisan vendor:publish --provider="Boolfalse\ClearCaches\ClearCachesServiceProvider"
```


## History:

#### v1.1.0: Removed view (for publishing), controller, route

##### v1.0.12: "minimum-stability" changed to "stable" version.

##### v1.0.11: Added 'clear-compiled' artisan command.

##### v1.0.6: Added 'dump' option for 'clearcaches' CLI custom artisan command.

##### v1.0.5: Added custom artisan commands with appropriate signatures ('clearcaches', 'droptables').

##### v1.0.4: Ability to publish package index page and have that as 'resources\views\clearcaches\cc.blade.php' file

##### v1.0.2: Added embed buttons from https://poser.pugx.org/ for README.md
