<?php

namespace App\Http\Livewire\Requestor;

use Livewire\Component;
use App\Models\Request as RequestModel;
use Livewire\WithFileUploads;
use App\Models\Payment;

class RequestViewStatus extends Component
{
    use WithFileUploads;

    public $request_id;
    public $receiver;
    public $request;

    public $documents=[];
    public $status;
    public $purpose;
    public $proof_of_payment='';

    public $amount;
    public $response;
    public $paymentForm=false;
    public $temp_id;
 
    public function render()
    {
        return view('livewire.requestor.request-view-status');
    }
    public function mount($id)
    {
        

        $this->request=RequestModel::where('id',$id)->first();
      
        if(auth()->user()->requestorinformation->id==$this->request->requestorinformation_id){
                $this->paymentForm=true;
                $this->amount = $this->request->documents()->sum('amount');
           
        }else{
            abort(403);
        }
    }

    public function create($id)
    {
        $this->validate([
            'proof_of_payment'=>'required|image|max:5012|mimes:jpeg,png,jpg'
        ]);

        $proofOfPayment=$this->proof_of_payment->store('Proof-Of-Payment','public');

        $update = RequestModel::find($id);
        $update->update([
            'status'=>'Payment Review',
        ]);

        Payment::create([
            'request_id'=>$id,
            'proofofpayment'=>$proofOfPayment,
        ]);
        return redirect('/requestor/dashboard');


        

    }
}
