<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FacultyListTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Get_faculty_List_test(): void
    {
        $response = $this->get('/admin/college-faculties');

        $response->assertStatus(302);
    }
}
