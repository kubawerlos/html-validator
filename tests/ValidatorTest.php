<?php

namespace Tests;

use KubaWerlos\HtmlValidator\Validator;
use PHPUnit_Framework_TestCase;

class ValidatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function validateCorrectHtml()
    {
        $this->assertEmpty(Validator::validate('<!doctype html><html><head><title>t</title></head></html>'));
    }

    /**
     * @test
     */
    public function validateIncorrectHtml()
    {
        $this->assertNotEmpty(Validator::validate('<!doctype html><html><head></head></html>'));
    }
}
