# X-Laravel - Validation Color Extend Package

<p align="center">
<a href="https://packagist.org/packages/X-Laravel/validation-color-extend" rel="nofollow"><img src="https://img.shields.io/packagist/v/X-Laravel/validation-color-extend" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/X-Laravel/validation-color-extend" rel="nofollow"><img src="https://img.shields.io/packagist/dt/X-Laravel/validation-color-extend" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/X-Laravel/validation-color-extend" rel="nofollow"><img src="https://poser.pugx.org/X-Laravel/validation-color-extend/dependents.svg" alt="Dependents"></a>
<a href="https://packagist.org/packages/X-Laravel/validation-color-extend" rel="nofollow"><img src="https://img.shields.io/packagist/l/X-Laravel/validation-color-extend" alt="License"></a>
</p>

<p align="center">
<a href="https://scrutinizer-ci.com/g/X-Laravel/validation-color-extend/build-status/master" rel="nofollow"><img src="https://scrutinizer-ci.com/g/X-Laravel/validation-color-extend/badges/quality-score.png?b=master" title="Scrutinizer Code Quality"></a>
<a href="https://styleci.io/repos/322282046" rel="nofollow"><img src="https://styleci.io/repos/322282046/shield?branch=master" alt="StyleCI"></a>
</p>

## Introduction

Color validation extend package for Laravel.

## Requirements

Laravel >=5.5. Other than that, this library has no requirements.

## Install

```bash
$ composer require x-laravel/validation-color-extend
```

## Example Usage

```php
$this->validate($request, ['theme.background' => 'required|color']);
```

## License

This package is open source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
