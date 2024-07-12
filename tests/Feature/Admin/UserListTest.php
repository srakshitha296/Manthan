<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserListTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Get_User_List_test(): void
    {
        $response = $this->get('/admin/users');

        $response->assertStatus(302);
    }
}
