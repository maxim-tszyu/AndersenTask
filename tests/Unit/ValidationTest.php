<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class ValidationTest extends TestCase
{
    public function testNameIsRequired()
    {
        $validator = Validator::make(['name' => ''], ['name' => 'required']);
        $this->assertTrue($validator->fails());
    }

    public function testNameIsString()
    {
        $validator = Validator::make(['name' => 'John Doe'], ['name' => 'string']);
        $this->assertFalse($validator->fails());
    }

    public function testNameIsLessThan255Chars()
    {
        $validator = Validator::make(['name' => str_repeat('a', 255)], ['name' => 'max:255']);
        $this->assertFalse($validator->fails());

        $validator = Validator::make(['name' => str_repeat('a', 256)], ['name' => 'max:255']);
        $this->assertTrue($validator->fails());
    }

    public function testEmailIsRequired()
    {
        $validator = Validator::make(['email' => ''], ['email' => 'required']);
        $this->assertTrue($validator->fails());
    }

    public function testEmailIsValidEmailFormat()
    {
        $validator = Validator::make(['email' => 'invalid-email'], ['email' => 'email']);
        $this->assertTrue($validator->fails());

        $validator = Validator::make(['email' => 'valid@example.com'], ['email' => 'email']);
        $this->assertFalse($validator->fails());
    }

    public function testMessageIsRequired()
    {
        $validator = Validator::make(['message' => ''], ['message' => 'required']);
        $this->assertTrue($validator->fails());
    }

    public function testMessageIsString()
    {
        $validator = Validator::make(['message' => 'This is a message'], ['message' => 'string']);
        $this->assertFalse($validator->fails());
    }
}
