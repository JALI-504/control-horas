<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;




class ControlHorasPracticante extends Component
{
    public function render()
    {
        return view('livewire.control-horas-practicante')
        ->extends('layouts.layout')
        ->section('content');
    }

    public function listaPracticantes($id)
{
    return redirect()->route('hp.practicante');
}

    
}
