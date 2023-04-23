<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Centro;

class Centros extends Component
{   
    public function render()
    {
        return view('livewire.centros', [
            'centros' => Centro::all()
        ])
        ->extends('layouts.layout')
        ->section('content');
    }

    public function delete  ($id){
        
        // dd($id);

        $Centro = Centro::find($id);
        
        $Centro->delete();

        return redirect()->route('hp.centro');
    }
}
