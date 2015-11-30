<?php

class FromStringAbstractTest extends PHPUnit_Framework_TestCase
{


    private $fromStringAbstract;

    private $data;

    protected function setUp()
    {
        $this->data = 'lorem ipsum';
        $this->fromStringAbstract = $this->getMockForAbstractClass(
                '\G4\Factory\FromStringAbstract',
                [$this->data]
        );
    }

    protected function tearDown()
    {
        $this->data = null;
        $this->fromStringAbstract = null;
    }

    public function testGet()
    {
        $this->assertEquals($this->data, $this->fromStringAbstract->get());
        $this->assertNull($this->getMockForAbstractClass('\G4\Factory\FromStringAbstract')->get());
    }

    public function testHas()
    {
        $this->assertTrue($this->fromStringAbstract->has());
        $this->assertFalse($this->getMockForAbstractClass('\G4\Factory\FromStringAbstract')->has());
    }

    public function setTest()
    {
        $this->fromStringAbstract->set();
        $this->assertNull($this->fromStringAbstract->get());

        $this->fromStringAbstract->set('tralala');
        $this->assertEquals('tralala', $this->get());
    }
}