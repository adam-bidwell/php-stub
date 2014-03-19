<?php
namespace Hi;

class HelloTest extends \PHPUnit_Framework_TestCase
{

    public function testSociable()
    {
        $hello = new Hello();
        $this->assertEquals('Hello world', $hello->greeting());
    }

}