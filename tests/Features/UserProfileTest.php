<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class UserProfileTest extends TestCase
{
    use DatabaseMigrations;

    public function test_user_has_profile()
    {
        $user = factory(User::class)->create(['username' => 'johndoe']);

        $this->visit('/users/'.$user->username)
            ->see($user->username);
    }
}
