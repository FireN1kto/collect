<?php
use Collect\Collect;
use PHPUnit\Framework\TestCase;

class CollectTest extends TestCase
{
    private $collect;
    protected function setUp(): void
    {
        $this->collect = new Collect();
    }

    public function testCount()
    {
        $this->collect->push(1);
        $this->collect->push(2);
        $this->collect->push(3);

        $this->assertEquals(3, $this->collect->count());
    }
}