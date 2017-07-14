<?php

namespace Tests;

use KubaWerlos\HtmlValidator\Validator;
use PHPUnit\Framework\TestCase;

class ValidatorTest extends TestCase
{
    /**
     * @test
     */
    public function validateCorrectHtml()
    {
        $html = '<!doctype html><html><head><title>t</title></head><body><table>';
        foreach (range(1, 1000) as $i) {
            $html .= "<tr><td>$i</td></tr>";
        }
        $html .= '</table></body></html>';

        $this->assertEmpty(Validator::validate($html));
    }

    /**
     * @test
     */
    public function validateIncorrectHtml()
    {
        $this->assertNotEmpty(Validator::validate('<!doctype html><html><head></head></html>'));
    }
}
