<?php
use PHPUnit\Framework\TestCase;

require_once 'DummySingleton.php';

class SingletonTest extends TestCase
{
    public function test()
    {
        $obj = DummySingleton::getInstance();
        $this->assertIsObject($obj);
        $obj->foo = 'Foo';

        $obj2 = DummySingleton::getInstance();
        $this->assertEquals('Foo', $obj2->foo);
    }
}
