<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\FindingAPI\Types;

use DTS\eBaySDK\FindingAPI\Types\TokenType;

class TokenTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new TokenType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\FindingAPI\Types\TokenType', $this->obj);
    }

    public function testExtendsTokenType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\TokenType', $this->obj);
    }
}
