<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            // Access
            [
                "name"=>"Bachelor of Physical Education (BPEd)",
                "campus_id"=>"1"
            ],
            [
                "name"=>"Bachelor in Elementary Education (BEED)",
                "campus_id"=>"1"
            ],
            [
                "name"=>"Bachelor in Secondary Education Major in English (BSEd-English)",
                "campus_id"=>"1"
            ],
            [
                "name"=>"Bachelor in Secondary Education Major in Filipino (BSEd-Filipino)",
                "campus_id"=>"1"
            ],
            [
                "name"=>"Bachelor in Secondary Education Major in Science (BSEd-Science)",
                "campus_id"=>"1"
            ],
            [
                "name"=>"Bachelor in Secondary Education Major in Social Studies (BSEd-Social Studies)",
                "campus_id"=>"1"
            ],
            [
                "name"=>"Bachelor in Secondary Education Major in Mathematics (BSEd-Mathematics)",
                "campus_id"=>"1"
            ],
            [
                "name"=>"Diploma in Teaching (DIT)",
                "campus_id"=>"1"
            ],
            [
                "name"=>"Bachelor of Science in Agricultural Technology (BAT)",
                "campus_id"=>"1"
            ],
            [
                "name"=>"Bachelor of Science in Criminology",
                "campus_id"=>"1"
            ],
            [
                "name"=>"Bachelor of Science in Nursing (BSN)",
                "campus_id"=>"1"
            ],
            [
                "name"=>"Bachelor of Science in Midwifery (BSM)",
                "campus_id"=>"1"
            ],
            [
                "name"=>"Bachelor of Science in Medical Technology",
                "campus_id"=>"1"
            ],
            [
                "name"=>"Diploma in Midwifery",
                "campus_id"=>"1"
            ],
            [
                "name"=>"Bachelor of Laws",
                "campus_id"=>"1"
            ],

            // Isulan
            [
                "name"=>"Bachelor of Science in Civil Engineering (BSCE)",
                "campus_id"=>"2"
            ],
            [
                "name"=>"Bachelor of Science in Computer Engineering (BSCpE)",
                "campus_id"=>"2"
            ],
            [
                "name"=>"Bachelor of Science in Electronics Engineering (BSECE)",
                "campus_id"=>"2"
            ],
            [
                "name"=>"Bachelor of Science in Computer Science (BSCS)",
                "campus_id"=>"2"
            ],
            [
                "name"=>"Bachelor of Science in Information Technology (BSIT)",
                "campus_id"=>"2"
            ],
            [
                "name"=>"Bachelor of Science in Information Systems (BSIS)",
                "campus_id"=>"2"
            ],
            [
                "name"=>"Bachelor in Technical-Vocational Teacher Education (BTVTEd) Major in Food Service Management",
                "campus_id"=>"2"
            ],
            [
                "name"=>"Bachelor in Technical-Vocational Teacher Education (BTVTEd) Major in Drafting Technology",
                "campus_id"=>"2"
            ],
            [
                "name"=>"Bachelor in Technical-Vocational Teacher Education (BTVTEd) Major in Automotive Technology",
                "campus_id"=>"2"
            ],
            [
                "name"=>"Bachelor in Technical-Vocational Teacher Education (BTVTEd) Major in Electrical Technology",
                "campus_id"=>"2"
            ],
            [
                "name"=>"Bachelor in Technical-Vocational Teacher Education (BTVTEd) Major in Electronic Technology",
                "campus_id"=>"2"
            ],
            [
                "name"=>"Bachelor in Technical-Vocational Teacher Education (BTVTEd) Major in Civil Technology",
                "campus_id"=>"2"
            ],
          

        ]);
    }
}

