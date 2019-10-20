<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class NewsTableSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('events')->insert([
            'id'=>'1',
            'eventType_id'=>'1',
            'name' => 'Dr.Cho Cho Myint',
           'description'=> 'Professor, Head',
          'created_at' => "2019-10-19 23:19:48"
        ]);
    }
}
