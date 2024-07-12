<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Dashboard_status_check(): void
    {
        $response = $this->get('/admin');

        $response->assertStatus(302);
    }
}
