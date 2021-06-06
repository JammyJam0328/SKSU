<?php

namespace App\Http\Livewire\Registrar;

use Livewire\Component;
use App\Models\Campus as CampusModel;
class Campus extends Component
{
    public $name;
    public $showAddModal=false;
    public function render()
    {
        return view('livewire.registrar.campus',[
            'campuses'=>CampusModel::paginate(10)
        ]);
    }

    public function create()
    {
        $data=$this->validate([
            'name'=>'required',
        ]);

        CampusModel::create($data);
        $this->name="";
        $this->showAddModal=false;
        $this->alert('success', 'Successfully saved!');
    }
}
