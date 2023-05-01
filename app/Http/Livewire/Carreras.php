<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Carrera;

class Carreras extends Component
{
    public function render()
    {
        return view('livewire.carreras',  [
            'carreras' =>Carrera::all()
        ])
        ->extends('layouts.layout')
        ->section('content');
    }

    public function delete  ($id){
        
        // dd($id);

        $Supervisor = Carrera::find($id);
        
        $Supervisor->delete();

        return redirect()->route('hp.carrera');
    }
}
