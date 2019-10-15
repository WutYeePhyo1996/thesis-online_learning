<?php

use Illuminate\Database\Seeder;

class StudentClassSeeder extends Seeder
{
   
    public function run()
    {
        DB::table('student_classes')->insert([
            'id'    =>'1',
           'year'   =>'1BEIT',
        ]);

        DB::table('student_classes')->insert([
            'id'    =>'2',
           'year'   =>'2BEIT',
        ]);

        DB::table('student_classes')->insert([
            'id'    =>'3',
           'year'   =>'3BEIT',
        ]);

        DB::table('student_classes')->insert([
            'id'    =>'4',
           'year'   =>'4BEIT',
        ]);

        DB::table('student_classes')->insert([
            'id'    =>'5',
           'year'   =>'5BEIT',
        ]);

        DB::table('student_classes')->insert([
            'id'    =>'6',
           'year'   =>'VIT-IT',
        ]);
    }
}
