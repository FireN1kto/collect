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
    // Тест для метода push()
    public function testPush()
    {
        $this->collect->push(1);
        $this->collect->push(2);
        $this->collect->push(3);
        $this->collect->push(4);

        $this->assertEquals([1, 2, 3, 4], $this->collect->toArray());
    }
}