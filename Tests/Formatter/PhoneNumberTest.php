<?php

class PhoneNumberTest extends PHPUnit_Framework_TestCase
{
    public function testSetPhoneNumber()
    {
        $pn = '+111234567890';
        $f = new \Ten24\UtilitiesBundle\Formatter\PhoneNumber();
        $f->setPhoneNumber($pn);
        $this->assertEquals($pn, $f->getPhoneNumber());
    }
}