<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Message;

class MessageModelTest extends TestCase
{
    use RefreshDatabase;

    public function testModelCreationWorks()
    {
        $fake_data = [
            'name' => 'John Pork',
            'email' => 'fakeemail@email.com',
            'message' => 'i appreciate this form!'
        ];

        $message = Message::create($fake_data);

        $this->assertDatabaseHas('messages', [
            'name' => 'John Pork',
            'email' => 'fakeemail@email.com',
            'message' => 'I appreciate this form!',
        ]);
    }
}
