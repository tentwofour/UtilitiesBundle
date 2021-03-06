<?php

namespace Ten24\UtilitiesBundle\Tests\Formatter;

use Ten24\UtilitiesBundle\Formatter\PhoneNumberFormatter;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var
     */
    protected $phoneNumber;

    /**
     * @var \Ten24\UtilitiesBundle\Formatter\PhoneNumberFormatter
     */
    protected $formatter;

    public function setUp()
    {
        $this->phoneNumber = '+111234567890';
        $this->formatter    = new PhoneNumberFormatter();
    }

    public function testGetSetPhoneNumber()
    {
        $this->formatter->setPhoneNumber($this->phoneNumber);
        $this->assertEquals($this->phoneNumber, $this->formatter->getPhoneNumber());
    }

    public function testGetNullComponent()
    {
        $this->formatter->setPhoneNumber($this->phoneNumber);
        $this->assertNull($this->formatter->getComponent());
    }

    public function testGetCountryCode()
    {
        $this->formatter->setPhoneNumber($this->phoneNumber);
        $this->assertEquals('+11', $this->formatter->getCountryCode());
    }

    public function testGetCountryCodeComponent()
    {
        $this->formatter->setPhoneNumber($this->phoneNumber);
        $this->assertEquals('+11', $this->formatter->getComponent(PhoneNumberFormatter::COUNTRY_CODE));
    }

    public function testGetAreaCodeComponent()
    {
        $this->formatter->setPhoneNumber($this->phoneNumber);
        $this->assertEquals('123', $this->formatter->getComponent(PhoneNumberFormatter::AREA_CODE));
    }

    public function testGetAreaCode()
    {
        $this->formatter->setPhoneNumber($this->phoneNumber);
        $this->assertEquals('123', $this->formatter->getAreaCode());
    }

    public function testGetPrefixComponent()
    {
        $this->formatter->setPhoneNumber($this->phoneNumber);
        $this->assertEquals('456', $this->formatter->getComponent(PhoneNumberFormatter::PREFIX));
    }

    public function testGetPrefix()
    {
        $this->formatter->setPhoneNumber($this->phoneNumber);
        $this->assertEquals('456', $this->formatter->getPrefix());
    }

    public function testGetLineNumberComponent()
    {
        $this->formatter->setPhoneNumber($this->phoneNumber);
        $this->assertEquals('7890', $this->formatter->getComponent(PhoneNumberFormatter::LINE_NUMBER));
    }

    public function testGetLineNumber()
    {
        $this->formatter->setPhoneNumber($this->phoneNumber);
        $this->assertEquals('7890', $this->formatter->getLineNumber());
    }
}