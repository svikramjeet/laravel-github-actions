<?php

namespace Tests\Unit;

use Tests\ParentTestClass;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Faker\Factory as Faker;
use App\User;


class ExampleTest extends ParentTestClass
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testCreateUser() {
    	// $this->faker = Faker::create();
    	// $user_data =  [
     //        'name'       => $this->faker->firstName,
     //        'email'      => $this->faker->unique()->safeEmail,
     //        'password'   => bcrypt('secret'),
     //     ];
     //    $user_info = new User($user_data);
     //    $user_saved = $user_info->save();
     //    $this->assertTrue($user_saved);        
    }
}
