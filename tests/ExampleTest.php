<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
   // use DatabaseTransactions;


    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {   
       
        $user = factory(\App\User::class)->create([
            'name'=>'Anderson Montilla',
            'email'=>'montillaanderson@gmail.com',
        ]);

        $this ->actingAs($user,'api')
            ->visit('api/user')
             ->see('Anderson Montilla')
             ->see('montillaanderson@gmail.com');
    }
}
