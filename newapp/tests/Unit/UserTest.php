<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function testUsedEmail() {
        $user = User::factory()->create();

        factory(User::class)->create([
            "name" => "a",
            "email" => "aaa@ggg.com",
            "password" => "dome"
        ]);
    }
}
