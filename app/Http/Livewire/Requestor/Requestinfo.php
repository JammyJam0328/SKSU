<?php

namespace App\Http\Livewire\Requestor;

use Livewire\Component;
use App\Models\Campus;
use App\Models\Course;
use App\Models\Requestorinformation;
use Livewire\WithFileUploads;
class Requestinfo extends Component
{
    use WithFileUploads;


    public $firstname;
    public $middlename;
    public $lastname;
    public $sex;
    public $email;
    public $address;
    public $contactnumber;
    public $studentnumber;
    public $course_id;
    public $status;
    public $campus_id;
    public $valid_id;

    public $courses=[];

    public $info;

    public function render()
    {
        if($this->campus_id){
           $this->courses=Course::where('campus_id',$this->campus_id)->get();
        } 
        return view('livewire.requestor.requestinfo',[
            'campuses'=>Campus::get()
        ]);
    }
    public function mount()
    {
        $exist = Requestorinformation::where('user_id',auth()->user()->id)->first();
        if($exist==null){
            $this->info=true;
        }else{
            $this->info=false;
        }
    }

    
}
