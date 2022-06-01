<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_should_error()
    {
        $items =  collect([1,3,4,5,6]);
        $this->assertArrayHasKey(4, $items);
    }
}
