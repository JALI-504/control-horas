<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

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
//     public function listaCentros($id)
// {
//     return redirect()->route('hp.centro');
// }

public function indereportx()
{
    $users = User::all();
   
    $today = Carbon::now()->format('d/m/Y');
    $pdf = PDF::loadView('constnacias', compact('today'));
    return $pdf->download('constancias.pdf');
}
  
}
