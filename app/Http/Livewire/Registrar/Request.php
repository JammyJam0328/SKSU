<?php

namespace App\Http\Livewire\Registrar;

use Livewire\Component;
use App\Models\Campus;
use App\Models\Course;
use App\Models\Document;
use App\Models\Request as RequestModel;
use App\Models\Requestorinformation;
use Illuminate\Database\Eloquent\Builder;

class Request extends Component
{
    public $request_id;
    public $responseMSG;

    public $prevResponse;




    public $viewRequest=false;
    public $viewedRequest=[];
    public $name;
    public $email;
    public $sex;
    public $address;
    public $contactnumber;
    public $campus;
    public $course;
    public $status;

    
    public $valid_id_url=null;


    public $request;
    public $receiver;
    public $purpose;
    public $studentnumber;

   public $documents=[];
    // public $name;

    public function render()
    {   
       return view('livewire.registrar.request',[
           'requests'=>RequestModel::where('status','Pending')
                    ->whereHas('requestorinformation',function(Builder  $q){
                        $q->where('campus_id',auth()->user()->campus_id);
                    })->get()
       ]);
    }

    public function close()
    {
        $this->viewRequest=false;
    }
    public function viewRequest($id,$request_id)
    {

        $update_data = RequestModel::find($request_id);
        $update_data->update([
            'read'=>"yes",
        ]);
        
        $this->viewRequest=true;
        $this->viewedRequest=Requestorinformation::where('id',$id)->first();
        $this->name=$this->viewedRequest->firstname.' '.$this->viewedRequest->middlename.' '.$this->viewedRequest->lastname;
        $this->sex=$this->viewedRequest->sex;
        $this->email=$this->viewedRequest->email;
        $this->address=$this->viewedRequest->address;
        $this->contactnumber=$this->viewedRequest->contactnumber;
        $this->studentnumber=$this->viewedRequest->studentnumber;

        $this->campus=$this->viewedRequest->campus->name;
        $this->course=$this->viewedRequest->course->name;
        $this->status=$this->viewedRequest->status;
        $this->valid_id_url=$this->viewedRequest->valid_id_url;
        $this->request=RequestModel::where('id',$request_id)->first();
        $this->prevResponse=$this->request->response;
        $this->purpose=$this->request->purpose;
        $this->receiver=$this->request->receivername;
        $this->documents = $this->request->documents;
        $this->request_id=$request_id;

        


    }


    public function approve($id)
    {

        $this->validate([
            'responseMSG'=>'max:150'
        ]);
        $approve_data = RequestModel::find($id);
        $approve_data->update([
            'status'=>'Approved',
            'response'=>$this->responseMSG,
        ]);
        
        $this->viewRequest=false;
        $this->alert('success','Saved Successfully');

    }

    public function deny($id)
    {

        $this->validate([
            'responseMSG'=>'max:150'
        ]);
        $approve_data = RequestModel::find($id);
        $approve_data->update([
            'status'=>'Denied',
            'response'=>$this->responseMSG,
        ]);

        $this->viewRequest=false;
        $this->alert('success','Saved Successfully');
    }
}
