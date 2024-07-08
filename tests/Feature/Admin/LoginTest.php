<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/admin/login');

        $response = $this->post('/admin/login', [
            'email' => 'admin@admin.com',
            'password' => '12345678',
        ]);

        $response->assertStatus(405);
    }
}
