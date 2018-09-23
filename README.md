
[![Latest Stable Version](https://poser.pugx.org/boolfalse/clearcaches/v/stable)](https://packagist.org/packages/boolfalse/clearcaches)
[![Total Downloads](https://poser.pugx.org/boolfalse/clearcaches/downloads)](https://packagist.org/packages/boolfalse/clearcaches)
[![Latest Unstable Version](https://poser.pugx.org/boolfalse/clearcaches/v/unstable)](https://packagist.org/packages/boolfalse/clearcaches)
[![License](https://poser.pugx.org/boolfalse/clearcaches/license)](https://packagist.org/packages/boolfalse/clearcaches)
[![Monthly Downloads](https://poser.pugx.org/boolfalse/clearcaches/d/monthly)](https://packagist.org/packages/boolfalse/clearcaches)
[![Daily Downloads](https://poser.pugx.org/boolfalse/clearcaches/d/daily)](https://packagist.org/packages/boolfalse/clearcaches)
[![composer.lock](https://poser.pugx.org/boolfalse/clearcaches/composerlock)](https://packagist.org/packages/boolfalse/clearcaches)


### v1.0.3: Ability to publish package index page and have that as 'resources\views\clearcaches\cc.blade.php' file

### v1.0.2: Added embed buttons from https://poser.pugx.org/ for README.md

## Package Installation:

Package for clearing/recreating all Laravel caches, and for dropping all DB tables. It's a package created for easy development.
This package is my first created package. So I will glad to hear any advices and suggestions.

Require this package with composer. It is recommended to only require the package for development.

```shell
composer require boolfalse/clearcaches --dev
```

For Laravel 5.4 and lower versions need to add service provider in config/app.php (or in config.php) to "providers" list array:
```shell
Boolfalse\ClearCaches\ClearCachesServiceProvider::class,
```
For Laravel 5.5 and higher Package have Auto-Discovery functionality, so doesn't require you to manually add the ServiceProvider.

## Update the package:

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

```shell
php artisan vendor:publish --provider="Boolfalse\ClearCaches\ClearCachesServiceProvider"
```

 - For index page: your-domain/dev/clearcaches-check
 - For clearing and recreating caches: your-domain/dev/clearcaches
 - For dropping all DB tables: your-domain/dev/droptables

Later I planning to do the same with custom artisan commands like:
php artisan clearcaches
php artisan droptables
