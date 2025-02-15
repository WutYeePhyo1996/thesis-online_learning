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
        $this->call(ClassesTableSeeder::class);
        $this->call(SpeakerTableSeeder::class);
        $this->call(NewsTableSeeder::class);
    }
}
