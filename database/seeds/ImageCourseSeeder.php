<?php

use Illuminate\Database\Seeder;
use App\ImageCourse;

class ImageCourseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // banyaknya sesuai dengan factory course
        factory(ImageCourse::class, 10)->create();
    }
}
