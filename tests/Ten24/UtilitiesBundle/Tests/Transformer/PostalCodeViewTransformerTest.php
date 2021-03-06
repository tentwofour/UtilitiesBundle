<?php

namespace Ten24\UtilitiesBundle\Tests;

use Ten24\UtilitiesBundle\Transformer\PostalCodeViewTransformer;

class PostalCodeViewTransformerTest extends \PHPUnit_Framework_TestCase
{
    public function testTransform()
    {
        $postalCode = 'S4p0H0';
        $formatter = new PostalCodeViewTransformer();
        $this->assertEquals('S4P 0H0', $formatter->transform($postalCode));
    }

    public function testReverseTransform()
    {
        $postalCode = 'S4p 0H0 ';
        $formatter = new PostalCodeViewTransformer();
        $this->assertEquals('S4P0H0', $formatter->reverseTransform($postalCode));
    }
}