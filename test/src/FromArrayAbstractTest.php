<?php

class FromArrayAbstractTest extends PHPUnit_Framework_TestCase
{

    private $fromArrayAbstract;

    private $data;

    protected function setUp()
    {
        $this->data = [
            'text' => 'lorem ipsum',
            'timestamp' => 1448917483,
        ];
        $this->fromArrayAbstract = $this->getMockForAbstractClass(
            '\G4\Factory\FromArrayAbstract',
            [$this->data]
        );
    }

    protected function tearDown()
    {
        $this->data = null;
        $this->fromArrayAbstract = null;
    }

    public function testGet()
    {
        $this->assertEquals($this->data['text'], $this->fromArrayAbstract->get('text'));
        $this->assertEquals($this->data, $this->fromArrayAbstract->get());
        $this->assertNull($this->fromArrayAbstract->get('id'));
    }

    public function testHas()
    {
        $this->assertTrue($this->fromArrayAbstract->has('text'));
        $this->assertFalse($this->fromArrayAbstract->has('id'));
    }

    public function testSet()
    {
        $this->fromArrayAbstract->set();
        $this->assertCount(0, $this->fromArrayAbstract->get());
        $this->assertEmpty($this->fromArrayAbstract->get());

        $data = ['test' => 'tralala'];
        $this->fromArrayAbstract->set($data);
        $this->assertNotEquals($this->data, $this->fromArrayAbstract->get());
        $this->assertEquals($data['test'], $this->fromArrayAbstract->get('test'));
    }
}