<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Campus;
use App\Models\Course;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
class CampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            $campus = Campus::create([
                'name'=>"Access Campus"
            ]);

            $campus->course()->create([
                'name'=>"Bachelor of Physical Education (BPEd)"
            ]);

            $campus->course()->create([
                'name'=>"Bachelor in Elementary Education (BEED)"
            ]);
            
            $campus->course()->create([
                'name'=>"Bachelor in Secondary Education Major in English (BSEd-English)"
            ]);
            
            $campus->course()->create([
                'name'=>"Bachelor in Secondary Education Major in Filipino (BSEd-Filipino)"
            ]);

            $campus->course()->create([
                'name'=>"Bachelor in Secondary Education Major in Science (BSEd-Science)"
            ]);

            $campus->course()->create([
                'name'=>"Bachelor in Secondary Education Major in Social Studies (BSEd-Social Studies)"
            ]);

            $campus->course()->create([
                'name'=>"Bachelor in Secondary Education Major in Mathematics (BSEd-Mathematics)"
            ]);

            $campus->course()->create([
                'name'=>"Diploma in Teaching (DIT)"
            ]);

            $campus->course()->create([
                'name'=>"Bachelor of Science in Agricultural Technology (BAT)"
            ]);

            $campus->course()->create([
                'name'=>"Bachelor of Science in Criminology"
            ]);

            $campus->course()->create([
                'name'=>"Bachelor of Science in Nursing (BSN)"
            ]);

            $campus->course()->create([
                'name'=>"Bachelor of Science in Midwifery (BSM)"
            ]);
            
            $campus->course()->create([
                'name'=>"Bachelor of Science in Medical Technology"
            ]);

            
            $campus->course()->create([
                'name'=>"Diploma in Midwifery"
            ]);

            
            $campus->course()->create([
                'name'=>"Bachelor of Laws"
            ]);


            $campus->user()->create([
                "role" => "registrar",
                "name" => "Access Campus",
                "password" => Hash::make("access12345"),
                "email" => "accessreg@gmail.com",
            ]);




            
            $campus = Campus::create([
                'name'=>"Isulan Campus"
            ]);

            $campus->course()->create([
                'name'=>"Bachelor of Science in Civil Engineering (BSCE)"
            ]);
            $campus->course()->create([
                'name'=>"Bachelor of Science in Computer Engineering (BSCpE)"
            ]);
            $campus->course()->create([
                'name'=>"Bachelor of Science in Electronics Engineering (BSECE)"
            ]);
            $campus->course()->create([
                'name'=>"Bachelor of Science in Computer Science (BSCS)"
            ]);
            $campus->course()->create([
                'name'=>"Bachelor of Science in Information Technology (BSIT)"
            ]);

             $campus->course()->create([
                'name'=>"Bachelor of Science in Information Systems (BSIS)"
            ]);
             $campus->course()->create([
                'name'=>"Bachelor in Technical-Vocational Teacher Education (BTVTEd) Major in Food Service Management"
            ]);
            $campus->course()->create([
                'name'=>"Bachelor in Technical-Vocational Teacher Education (BTVTEd) Major in Drafting Technology"
            ]);
            $campus->course()->create([
                'name'=>"Bachelor in Technical-Vocational Teacher Education (BTVTEd) Major in Automotive Technology"
            ]);
            $campus->course()->create([
                'name'=>"Bachelor in Technical-Vocational Teacher Education (BTVTEd) Major in Electrical Technology"
            ]);
            $campus->course()->create([
                'name'=>"Bachelor in Technical-Vocational Teacher Education (BTVTEd)  Major in Electronic Technology"
            ]);
            $campus->course()->create([
                'name'=>"Bachelor in Technical-Vocational Teacher Education (BTVTEd)   Major in Civil Technology"
            ]);

            $campus->user()->create([
                "role" => "registrar",
                "name" => "Isulan Campus",
                "password" => Hash::make("isulan12345"),
                "email" => "isulanreg@gmail.com",
            ]);

                


            $campus = Campus::create([
                'name'=>"Tacurong Campus"
            ]);

            $campus->course()->create([
                'name' => 'Bachelor of Arts in Economics'
            ]);
            $campus->course()->create([
                'name' => 'Bachelor of Arts in Political Science'
            ]);
            $campus->course()->create([
                'name' => 'Bachelor of Science in Biology'
            ]);
            $campus->course()->create([
                'name' => 'Bachelor of Science in Environmental Science'
            ]);
            $campus->course()->create([
                'name' => 'Bachelor of Science in Entrepreneurship'
            ]);
            $campus->course()->create([
                'name' => 'Bachelor of Science in Accountancy'
            ]);
            $campus->course()->create([
                'name' => 'Bachelor of Science in Management Accounting'
            ]);
            $campus->course()->create([
                'name' => 'Bachelor of Science in Hospitality Management'
            ]);
            $campus->course()->create([
                'name' => 'Bachelor of Science in Accounting Information System'
            ]);
            $campus->course()->create([
                'name' => 'Bachelor of Science in Tourism Management'
            ]);

            $campus->user()->create([
                "role" => "registrar",
                "name" => "Tacurong Campus",
                "password" => Hash::make("tacurong12345"),
                "email" => "tacurongreg@gmail.com",
            ]);


            
        $campus = Campus::create([
            "name" => "Kalamansig Campus"
        ]);

        $campus->course()->create([
            'name' => 'Diploma in Teaching'
        ]);
        $campus->course()->create([
            'name' => 'Bachelor of Science in Secondary Education'
        ]);
        $campus->course()->create([
            'name' => 'Bachelor in Elementary Education'
        ]);
        $campus->course()->create([
            'name' => 'Bachelor in Biology'
        ]);
        $campus->course()->create([
            'name' => 'Bachelor in Fisheries'
        ]);

        $campus->course()->create([
            'name' => 'Bachelor of Science in Criminology'
        ]);

        $campus->course()->create([
            'name' => 'Bachelor of Science in Information Technology'
        ]);

        $campus->user()->create([
            "role" => "registrar",
            "name" => "Kalamansig Campus",
            "password" => Hash::make("kalamansig12345"),
            "email" => "kalamansigreg@gmail.com",
        ]);





        $campus = Campus::create([
            "name" => "Bagumbayan Campus"
        ]);

        $campus->course()->create([
            'name' => 'Bachelor of Science in Agribusiness'
        ]);
        $campus->course()->create([
            'name' => 'Bachelor of Technology and Livelihood Education major in Agri-fisheries'
        ]);

        
        $campus->user()->create([
            "role" => "registrar",
            "name" => "Bagumbayan Campus",
            "password" => Hash::make("bagumbayan12345"),
            "email" => "bagumbayanreg@gmail.com",
        ]);


        

        $campus = Campus::create([
            "name" => "Palimbang Campus"
        ]);



        $campus->course()->create([
            'name' => 'Bachelor of Science in Agribusiness'
        ]);

      
        $campus->course()->create([
            'name' => 'Bachelor in Elementary Education'
        ]);

        $campus->user()->create([
            "role" => "registrar",
            "name" => "Palimbang Campus",
            "password" => Hash::make("palimbang12345"),
            "email" => "palimbangreg@gmail.com",
        ]);




        
        $campus = Campus::create([
            "name" => "Lutayan Campus"
        ]);



        $campus->course()->create([
            'name' => 'Bachelor in Agricultural Technology'
        ]);
        $campus->course()->create([
            'name' => 'Bachelor of Science in Agriculture'
        ]);


        $campus->course()->create([
            'name' => 'Bachelor in Elementary Education'
        ]);

        $campus->user()->create([
            "role" => "registrar",
            "name" => "Lutayan Campus",
            "password" => Hash::make("lutayan12345"),
            "email" => "lutayanreg@gmail.com",
        ]);








        // DB::table('campuses')->insert([
        //     [
        //         "name"=>"Access Campus"
        //     ],
        //     [
        //         "name"=>"Isulan Campus"
        //     ], 
        //     [
        //         "name"=>"Tacurong Campus"
        //     ],  
        //     [
        //         "name"=>"Kalamansig Campus"
        //     ],  
        //     [
        //         "name"=>"Palimbang Campus"
        //     ],  
        //     [
        //         "name"=>"Bagumbayan Campus"
        //     ],  
        //     [
        //         "name"=>"Lutayan Campus"
        //     ]

        // ]);
    }
}
