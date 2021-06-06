<?php

namespace App\Http\Livewire\Requestor;

use Livewire\Component;
use App\Models\Campus;
use App\Models\Course;
use App\Models\Requestorinformation;
class Addinformation extends Component
{

         public $courses=[];
        public $users;
    
        public $firstname;
        public $middlename;
        public $lastname;
        public $sex;
        public $email;
        public $address;
        public $contactnumber;
        public $studentnumber;
        public $campus_id;
        public $course_id;
        public $valid_id;
        public $status;
    
        public $existInformations=[];
    public function render()
    {

        


        return view('livewire.requestor.addinformation');
    }



    public function create()
    {

        $existInfo=Requestorinformation::where('user_id',auth()->user()->id)
                     ->first();
      
        if($existInfo==null){
            
            $this->validate([      
                "firstname"=>"required",
                "lastname"=>"required",
                "sex"=>"required",
                "email"=>"required|email",
                "address"=>"required",
                "contactnumber"=>"required|min:10|max:11",
                "studentnumber"=>"required|numeric",
                "course_id"=>"required",
                "status"=>"required",
                "campus_id"=>"required",
                "valid_id"=>"required|max:5120",
            ]);

            $valid_id_url=$this->valid_id->store('ID','public');

            Requestorinformation::create([
                "user_id"=>auth()->user()->id,
                "firstname"=>$this->firstname,
                "middlename"=>$this->middlename,
                "lastname"=>$this->lastname,
                "sex"=>$this->sex,
                "email"=>$this->email,
                "address"=>$this->address,
                "contactnumber"=>$this->contactnumber,
                "studentnumber"=>$this->studentnumber,
                "course_id"=>$this->course_id,
                "status"=>$this->status,
                "campus_id"=>$this->campus_id,
                "valid_id_url"=>$valid_id_url,
            ]);

            $this->alert('success', 'Successfully saved!');
        
        }else{
            

        }

        


    }
}
