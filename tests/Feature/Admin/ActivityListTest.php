<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ActivityListTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Activity_List_Check(): void
    {
        $response = $this->get('/admin/student-activities');

        $response->assertStatus(302);
    }
}
