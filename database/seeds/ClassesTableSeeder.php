<?php

use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Classes')->create([
            'year' => '1BE-IT'
        ]);
        factory('App\Classes')->create([
            'year' => '2BE-IT'
        ]);
        factory('App\Classes')->create([
            'year' => '3BE-IT'
        ]);
        factory('App\Classes')->create([
            'year' => '4BE-IT'
        ]);
        factory('App\Classes')->create([
            'year' => '5BE-IT'
        ]);
        factory('App\Classes')->create([
            'year' => 'VIBE-IT'
        ]);
    }
}
