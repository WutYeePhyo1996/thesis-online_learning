<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory('App\User')->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'type'=>'admin'
        ]);

        Factory('App\User')->create([
            'name' => 'teacher',
            'email' => 'teacher@gmail.com',
            'type'=>'teacher'
        ]);
    }
}
