<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Carrera;
use App\Models\Centro;
use App\Models\Constancia;
use App\Models\Supervisor;
//use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;


class Constancias extends Component
{
    public function render()
    {
    return view('livewire.constancias', [
        'constancias' => Constancia::all(),
        'supervisores' => Supervisor::all(),
        'carreras' => Carrera::all(),
        'centros' => Centro::all(),


    ])
    ->extends('layouts.layout')
    ->section('content');
}

public function download(){
    $today = Carbon::now()->format('d/m/Y');
    $pdf = \PDF::loadView('constnacias', compact('today'));
    return $pdf->download('constancias.pdf');
  }
}
