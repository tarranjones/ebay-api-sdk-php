<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\RestAPI\Enums;

use DTS\eBaySDK\RestAPI\Enums\EnumStringType;

class EnumStringTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new EnumStringType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\RestAPI\Enums\EnumStringType', $this->obj);
    }
}
