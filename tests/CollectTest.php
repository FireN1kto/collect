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

    public function testUnshift()
    {
        $this->collect->unshift(3);
        $this->collect->unshift(2);
        $this->collect->unshift(1);
        $this->collect->unshift(0);

        $this->assertEquals([0, 1, 2, 3], $this->collect->toArray());
    }
}