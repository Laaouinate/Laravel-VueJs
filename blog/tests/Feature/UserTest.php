<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function testcreateuser()
    {
        $this->actingAs(factory(User::class)->create());

        $response = $this->get('/user/registe')
            ->assertOk();
    }
}
