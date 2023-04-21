<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Hora;
use Livewire\Component;

class Horas extends Component
{
    public $total_horas;
    
    public function render()
    {
        return view('livewire.horas', [
            'horas' => Hora::all()
        ])
        ->extends('layouts.layout')
        ->section('content');
    }

    public function delete  ($id){
        
        // dd($id);

        $Hora = Hora::find($id);
        
        $Hora->delete();

        return redirect()->route('hp.hora');
    }
}


