KubaWerlos / HTML Validator
===========================

[![Latest Stable Version](https://poser.pugx.org/kubawerlos/html-validator/v/stable)](https://packagist.org/packages/kubawerlos/html-validator)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%205.3-8892BF.svg)](https://php.net)
[![License](https://poser.pugx.org/kubawerlos/html-validator/license)](https://packagist.org/packages/kubawerlos/html-validator)
[![Build Status](https://travis-ci.org/kubawerlos/html-validator.svg?branch=master)](https://travis-ci.org/kubawerlos/html-validator)

Lightweight library for HTML validation against Validator.nu

Installation
------------

    composer require kubawerlos/html-validator


Usage
-----

```php
<?php

use KubaWerlos\HtmlValidator\Validator;

assertEmpty(Validator::validate(file_get_contents('index.html')));
```
