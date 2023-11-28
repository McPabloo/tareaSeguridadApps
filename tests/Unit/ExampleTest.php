<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */

    public function test_value_is_greater_than()
    {
        $value1 = 10;
        $value2 = 5;
        $this->assertGreaterThan($value2, $value1);
    }
     
    public function test_variable_is_array()
    {
        $array = 1;
        $this->assertIsArray($array);
    }
     
    public function test_value_is_null()
    {
        $value = null;
        $this->assertNull($value);
    }

    public function test_string_contains_substring()
    {
        $string = 'asdasd';
        $this->assertStringContainsString('Assert', $string);
    }

    public function test_array_has_specific_key()
    {
        $array = ['key' => 'value', 'another_key' => 'another_value'];
        $this->assertArrayHasKey('key', $array);
    }

    public function test_value(): void
    {
        $this->assertEquals(3,3);
    }
    
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function test_value2(): void
    {
        $this->assertEquals(2,2);
    }

}
