<?php
namespace App\Models;

class Greeter
{
    public function greet(string $name)
    {
        return "Hello, " . $name . "!";
    }
}