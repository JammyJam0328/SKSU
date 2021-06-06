<?php

namespace App\Http\Livewire\Registrar;

use Livewire\Component;
use App\Models\Document;
use Livewire\WithPagination;
class Documents extends Component
{
    public $name;
    public $amount;
    public $delete_id;
    public $showDeleteModal=false;
    public $showAddModal=false;


    use WithPagination;
    public function render()
    {
        return view('livewire.registrar.documents',[
            'documents'=>Document::where('campus_id',auth()->user()->campus_id)->paginate(7)
        ]);
    }

    public function create()
    {
        $this->validate([
            'name'=>'required',
            'amount'=>'required|numeric',
        ]);

        Document::create([
            'name'=>$this->name,
            'amount'=>$this->amount,
            'campus_id'=>auth()->user()->campus_id,
        ]);
        $this->name="";
        $this->amount="";
        $this->showAddModal=false;
        $this->alert('success', 'Successfully saved!');
    }

    public function getDelete($id)
    {
        $this->delete_id=$id;
        $this->showDeleteModal=true;

    }
    
    public function delete()
    {
       
        Document::where('id',$this->delete_id)->delete();
        $this->showDeleteModal=false;

       $this->alert('success', 'Successfully deleted!');
    }

}
