<?php

namespace App\Http\Livewire\Requestor;

use Livewire\Component;
use App\Models\Campus;
use App\Models\Course;
use App\Models\Document;
use App\Models\Request;



use App\Models\Requestorinformation;

use Livewire\WithFileUploads;
class Myrequest extends Component
{
    use WithFileUploads;

    // requestorInfo
    public $firstname;
    public $middlename;
    public $lastname;
    public $sex;
    public $email;
    public $address;
    public $contact_number;
    public $student_number;
    public $course_id;
    public $status;
    public $campus_id;
    public $valid_id;
    

    public $courses=[];


    public $information = true;


    // request
    public $receivername;
    public $purpose;
    public $selectedDocs=[];

    public $docsList=[];
    


    public function render()
    {
        if($this->campus_id){
            $this->courses=Course::where('campus_id',$this->campus_id)->get();
         } 
         $this->docsList=Document::where('availability','available')->get();
        return view('livewire.requestor.myrequest',[
            'campuses'=>Campus::get()
        ]);
    }

    public function  mount()
    {
        $exist = Requestorinformation::where('user_id',auth()->user()->id)->first();
        if($exist==null){
            $this->information=true;
        }else{
            $this->information=false;
        }
    }

    public function create()
    {

     $this->validate([      
         "firstname"=>"required|alpha",
         "lastname"=>"required|alpha",
         "sex"=>"required",
         "email"=>"required|email",
         "address"=>"required",
         "contact_number"=>"required|numeric",
         "student_number"=>"required|numeric",
         "course_id"=>"required",
         "status"=>"required",
         "campus_id"=>"required",
         "valid_id"=>"required|image|max:5120|mimes:jpeg,png,jpg",
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
         "contactnumber"=>$this->contact_number,
         "studentnumber"=>$this->student_number,
         "course_id"=>$this->course_id,
         "status"=>$this->status,
         "campus_id"=>$this->campus_id,
         "valid_id_url"=>$valid_id_url,
     ]);
 
     $this->alert('success','Successfully saved!');

     $this->information=false;
     
    }


    public function requestdocument()
    {

        $this->validate([
            'selectedDocs'=>'required',
            'receivername'=>'required',
            'purpose'=>'required|max:150|min:5'
        ]);

        $docs=Request::create([
            'requestorinformation_id'=>auth()->user()->requestorinformation->id,
            'receivername'=>$this->receivername,
            'purpose'=>$this->purpose,
        ]);
        
        $document=Request::find($docs->id);
        $document->documents()->attach($this->selectedDocs);

        return redirect()->route('requestor-dashboard');

    }
 
}
