<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Constancia;

class Constancias extends Component
{
    public function render()
    {
    return view('livewire.constancias', [
        'constancias' => Constancia::all()
    ])
    ->extends('layouts.layout')
    ->section('content');
}

public function imprimir(){
    $today = Carbon::now()->format('d/m/Y');
    $pdf = \PDF::loadView('constnacias', compact('today'));
    return $pdf->download('constancias.pdf');
  }
}
