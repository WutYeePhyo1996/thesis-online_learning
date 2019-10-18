<?php

use App\StudentClass;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ThesisSeeder::class);
<<<<<<< HEAD
        $this->call(StudentClassSeeder::class);
=======
>>>>>>> 4444736b525943205cfc4d22f71cfb8ca20eaa4c
        $this->call(ClassesTableSeeder::class);
    }
}
