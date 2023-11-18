<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */

    public function test_value(): void
    {
        $this->assertEquals(3,3);
    }
    
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }


   
}
