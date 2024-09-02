<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SubmissionTest extends TestCase
{
    use RefreshDatabase;

    public function testCanSubmitData()
    {
        $response = $this->postJson('/api/submit', [
            'name'    => 'John Doe',
            'email'   => 'john.doe@example.com',
            'message' => 'This is a test message.',
        ]);

        $response->assertStatus(200);
        $response->assertJson(['message' => 'Submission received and is being processed.']);
    }
}
