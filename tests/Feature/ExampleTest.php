<?php

<<<<<<< HEAD
namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
=======
test('returns a successful response', function () {
    $response = $this->get(route('home'));

    $response->assertOk();
});
>>>>>>> 0a5a29f58d1eb073bb43845033db6a4243d82e1d
