<?php

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
        $this->call(ClassesTableSeeder::class);
>>>>>>> c3f0e6d4b947106e56a4e0fc85556573418fef9c
    }
}
