<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StudentListTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Get_student_List_test(): void
    {
        $response = $this->get('/admin/college-students');

        $response->assertStatus(302);
    }
}
