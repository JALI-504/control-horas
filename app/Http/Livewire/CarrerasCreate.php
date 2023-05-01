<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Carrera;
use App\Models\Centro;

class CarrerasCreate extends Component
{
    public $Carrera;
    public $edit = false;

    public $carrera="";  
    public $centro="";


    protected $rules = [
        'carrera' => 'required', 
       
    ];

    protected $messages = [
        'carrera.required' => 'Este campo debe deser oblicatorio.',
        // 'Carrera.min' => 'El Carrera no debe ser menor de 8 caracteres.',
        // 'Carrera.max' => 'El Carrera no debe de ser mayor de 50 caracteres.',
    ];

    public function mount($id=null){
        if ($id != null) {
            $this->edit = true;

            $this->Carrera = Carrera::find($id);

            $this->carrera= $this->Carrera->carrera;
           
        }

    }

    public function render()
    {
        return view('livewire.carreras-create', [
            'centros' => Centro::all()
        ])
        ->extends('layouts.layout')
        ->section('content');
    }

    public function guardar_carrera(){

        $this->validate();

        if ($this->edit == true) {

            $this->Carrera->carrera = $this->carrera;
           

            $this->Carrera->save();

        }else {
            $carrera = Carrera::create([
                'centro_id' => $this->centro,
                'user_id' => Auth()->user()->id,
                'carrera' => $this->carrera,
            ]);
        }

        return redirect()->route('hp.carrera');
    }


}


