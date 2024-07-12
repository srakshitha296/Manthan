<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PrinicpleListTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Get_Principle_List_test(): void
    {
        $response = $this->get('/admin/principles');

        $response->assertStatus(302);
    }
}
