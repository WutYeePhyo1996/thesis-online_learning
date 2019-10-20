<?php

use Illuminate\Database\Seeder;

class SpeakerTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('speakers')->insert([
            'id'=>'1',
            'class_id'=>'1',
            'name' => 'Dr.Cho Cho Myint',
           'position'=> 'Professor, Head',
        ]);
    }
}
