<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Role;

class Roles extends Component
{
    public function render()
    {

        $roles = Role::all();

        return view('livewire.asignar-roles', 'roles', [
            'practicantes' => User::all()
        ])
        ->extends('layouts.layout')
        ->section('content');
    }

    public function delete($id){
        
        // dd($id);

        $Practicante = User::find($id);
        
        $Practicante->delete();

        return redirect()->route('hp.asignar-roles');
    }
}
