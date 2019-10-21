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
            'id'    => '1',
            'year' => '1BE-IT'
        ]);
        factory('App\Classes')->create([
            'id'    => '2',
            'year' => '2BE-IT'
        ]);
        factory('App\Classes')->create([
            'id'    => '3',
            'year' => '3BE-IT'
        ]);
        factory('App\Classes')->create([
            'id'    => '4',
            'year' => '4BE-IT'
        ]);
        factory('App\Classes')->create([
            'id'    => '5',
            'year' => '5BE-IT'
        ]);
        factory('App\Classes')->create([
            'id'    => '6 ',
            'year' => 'VIBE-IT'
        ]);
    }


}
