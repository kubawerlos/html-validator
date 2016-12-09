# Kuba Werłos / HTML validator

[![Latest Stable Version](https://img.shields.io/packagist/v/kubawerlos/html-validator.svg)](https://packagist.org/packages/kubawerlos/html-validator)
[![PHP Version](https://img.shields.io/badge/php-%3E%3D%205.6-8892BF.svg)](https://php.net)
[![License](https://img.shields.io/github/license/kubawerlos/html-validator.svg)](https://packagist.org/packages/kubawerlos/html-validator)
[![Build Status](https://img.shields.io/travis/kubawerlos/html-validator/master.svg)](https://travis-ci.org/kubawerlos/html-validator)

Simple PHP library for HTML validation against https://checker.html5.org

## Installation
```bash
    composer require --dev kubawerlos/html-validator
```

## Usage
```php
    use KubaWerlos\HtmlValidator\Validator;

    assertEmpty(Validator::validate(file_get_contents('index.html')));
```
