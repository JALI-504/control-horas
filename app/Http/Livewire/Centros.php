<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Centro;
use WireUi\Traits\Actions;

class Centros extends Component
{   
    use Actions;

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

        $this->notification()->confirm([
            'title'       => '¿Seguro desea Eliminar el Centro Educativo?',
            'description' => '¿Borrar Centro Educativo?',
            'icon'        => 'question',
            'accept'      => [
                'label'  => 'Si, Borrar',
                'method' => 'delete',
                'params' => 'Borrando',
            ],
            'reject' => [
                'label'  => 'No, cancelar',
                'method' => 'cancel',
            ],
        ]);

        return redirect()->route('hp.centro');


    }
}
