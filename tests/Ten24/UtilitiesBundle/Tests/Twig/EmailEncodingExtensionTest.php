<?php

namespace Ten24\UtilitiesBundle\Tests;

use Ten24\UtilitiesBundle\Twig\EmailEncodingExtension;

class EmailEncodingExtensionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Ten24\UtilitiesBundle\Twig\EmailEncodingExtension;
     */
    protected $extension;

    public function setUp()
    {
        $this->extension = new EmailEncodingExtension();
    }

    public function testGetName()
    {
        $this->assertEquals('ten24_emailencoder', $this->extension->getName());
    }

    public function testFilter()
    {
        $text = 'ian.bool@co.de';

        $this->assertEquals(
            html_entity_decode($this->extension->filter($text), ENT_QUOTES, 'UTF-8'),
            $text
        );
    }
}