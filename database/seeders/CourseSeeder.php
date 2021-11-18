<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Course::create([
'cat_id'=>'1',
'name'=>'front end',
'trainer_id'=>'1',
'small_des'=>'html,css,js',
'des'=>'A front-end web developer is responsible for implementing visual and interactive
elements that users engage with through their web browser when using a web application. They are usually
supported by back-end web developers.',

'price'=>'3000',
'photo'=>'web.JPEG',
        ]);
        Course::create([
            'cat_id'=>'2',
            'name'=>'English',
            'trainer_id'=>'5',
            'small_des'=>'This course emphasizes the fundamental language skills of reading, writing, speaking, listening, thinking, viewing',
            'des'=>'his course emphasizes the fundamental language skills of reading, writing, speaking, listening, thinking,
             viewing and presenting. An emphasis on vocabulary and composition skills will be an on-going part of the program.',

            'price'=>'4000',
            'photo'=>'e.JPEG',
                    ]);
                    Course::create([
                        'cat_id'=>'3',
                        'name'=>'Photoshop',
                        'trainer_id'=>'2',
                        'small_des'=>'The world’s best imaging and graphic design software is at the core of just about every creative project, from photo editing and compositing to digital painting, animation, and graphic design.',
                        'des'=>'Photoshop on desktop and iPad, 100GB of cloud storage, Adobe Fresco, Adobe Portfolio, Adobe Fonts, and access to the latest features and updates as soon as they’re released ',
                        'price'=>'4000 ',
                        'photo'=>'ph.JPEG',
                                ]);
    }
}
