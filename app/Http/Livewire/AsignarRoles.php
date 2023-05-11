<?php

namespace App\Http\Livewire;

use App\Models\Rol;
use Livewire\Component;
// use App\Models\User;

class AsignarRoles extends Component
{
    public function render()
    {
        return view('livewire.asignar-roles', [
            'practicantes' => Rol::all()
        ])
        ->extends('layouts.layout')
        ->section('content');
    }

    public function delete($id){
        
        // dd($id);

        $Practicante = Rol::find($id);
        
        $Practicante->delete();

        return redirect()->route('hp.roles');
    }
}
