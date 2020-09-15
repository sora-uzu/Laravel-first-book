<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\User;
use App\Person;

class HelloTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHello()
    {
        factory(User::class)->create([
            'name' => 'AAA',
            'email' => 'BBB@CCC.Com',
            'password' => 'password',
        ]);
        factory(User::class, 10)->create();

        $this->assertDatabaseHas('users', [
            'name' => 'AAA',
            'email' => 'BBB@CCC.Com',
            'password' => 'password',
        ]);

        factory(Person::class)->create([
            'name' => 'xxx',
            'mail' => 'yyy@sss.com',
            'age' => 12,
        ]);
        factory(Person::class, 10)->create();

        $this->assertDatabaseHas('people', [
            'name' => 'xxx',
            'mail' => 'yyy@sss.com',
            'age' => 12,
        ]);




        // $this->assertTrue(true);

        // $response = $this->get('/');
        // $response->assertStatus(200);

        // $response = $this->get('/hello');
        // $response->assertStatus(302);

        // $user = factory(User::class)->create();
        // $response = $this->actingAs($user)->get('/hello');
        // $response->assertStatus(200);

        // $response = $this->get('/no_route');
        // $response->assertStatus(404);
    }
}
