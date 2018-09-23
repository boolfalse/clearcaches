
[![Latest Stable Version](https://poser.pugx.org/boolfalse/clearcaches/v/stable)](https://packagist.org/packages/boolfalse/clearcaches)
[![Total Downloads](https://poser.pugx.org/boolfalse/clearcaches/downloads)](https://packagist.org/packages/boolfalse/clearcaches)
[![Latest Unstable Version](https://poser.pugx.org/boolfalse/clearcaches/v/unstable)](https://packagist.org/packages/boolfalse/clearcaches)
[![License](https://poser.pugx.org/boolfalse/clearcaches/license)](https://packagist.org/packages/boolfalse/clearcaches)
[![Monthly Downloads](https://poser.pugx.org/boolfalse/clearcaches/d/monthly)](https://packagist.org/packages/boolfalse/clearcaches)
[![Daily Downloads](https://poser.pugx.org/boolfalse/clearcaches/d/daily)](https://packagist.org/packages/boolfalse/clearcaches)
[![composer.lock](https://poser.pugx.org/boolfalse/clearcaches/composerlock)](https://packagist.org/packages/boolfalse/clearcaches)


### v1.0.2: Added embed buttons from https://poser.pugx.org/ for README.md

## Installation:

Package for clearing/recreating all Laravel caches, and for dropping all DB tables. It's a package created for easy development.
This package is my first created package. So I will glad to hear any advices and suggestions.

Require this package with composer. It is recommended to only require the package for development.

```shell
composer require boolfalse/clearcaches --dev
```

Laravel 5.5 uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

The Debugbar will be enabled when `APP_DEBUG` is `true`.

## Update:

```shell
composer update boolfalse/clearcaches --lock
```

For updating all existing packages, just run:
```shell
composer update
```

## Remove:

```shell
composer remove boolfalse/clearcaches
```

 - For index page: your-domain/dev/
 - For clearing and recreating caches: your-domain/dev/clearcaches
 - For dropping all DB tables: your-domain/dev/droptables

Later I planning to do the same with custom artisan commands like:
php artisan clearcaches
php artisan droptables
