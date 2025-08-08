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
        // $this->call(UserSeeder::class);
        
        // mentor dulu yang dibuat, karena di course ada mentor_id
        $this->call(MentorSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(ImageCourseSeeder::class);
        $this->call(ChapterSeeder::class);
        $this->call(LessonSeeder::class);
    }
}
