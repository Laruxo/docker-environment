<?php
use PHPUnit\Framework\TestCase;
use App\Models\Greeter;

class GreeterTest extends TestCase
{
    public function testGreetJohn()
    {
        $greeter = new Greeter();
        $this->assertEquals("Hello, John!", $greeter->greet("John"));
    }
}