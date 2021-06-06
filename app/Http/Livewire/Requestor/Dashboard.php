<?php

namespace App\Http\Livewire\Requestor;

use Livewire\Component;
use App\Models\Campus;
use App\Models\Course;
use App\Models\Document;
use App\Models\Request;
use App\Models\Requestorinformation;
class Dashboard extends Component
{
    public $requests=[];
    public function render()
    {
        return view('livewire.requestor.dashboard');
    }
    public function mount()
    {
        $requestor = Requestorinformation::where('user_id',auth()->user()->id)->first();
        if($requestor){
            $this->requests=Request::where('requestorinformation_id',$requestor->id)->get();
        }
    }

    
}
