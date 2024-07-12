<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HoDListTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Get_HoD_List_test(): void
    {
        $response = $this->get('/admin/ho-ds');

        $response->assertStatus(302);
    }
}
