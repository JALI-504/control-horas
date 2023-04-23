<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Centro;

class CentrosCreate extends Component
{
  
    public $Centro;
    public $edit = false;
    public $nombre_centro="";
    public $facultad="";
    public $carrera="";
    
    protected $rules = [
        'nombre_centro' => 'required', 
        'facultad' => 'required',
        'carrera$carrera' => 'required',
    ];

    protected $messages = [
        'nombre_centro.required' => 'Este campo debe deser oblicatorio.',
        'facultad.required' => 'Este campo debe de ser obligatorio.',
        'carrera.required' => 'Este campo debe de ser obligatorio.',
    ];

    
    public function mount($id=null){
        if ($id != null) {
            $this->edit = true;
            
            $this->Centro = Centro::find($id);

            $this->nombre_centro= $this->Centro->nombre_centro;
            $this->facultad=$this->Centro->facultad;
            $this->carrera=$this->Centro->carrera;
        }

    }

    public function render()
    {
        return view('livewire.Centros-create')
        ->extends('layouts.layout')
        ->section('content');

    }

    public function guardar_centro(){

        $this->validate();
        

        if ($this->edit == true) {

            $this->Centro->nombre_centro = $this->nombre_centro;
            $this->Centro->facultad = $this->facultad;
            $this->Centro->carrera = $this->carrera;

            $this->Centro->save();

        }else {
            $Centro = Centro::create([
                'user_id' => Auth()->user()->id,
                'nombre_centro' => $this->nombre_centro,
                'facultad' => $this->facultad,
                'carrera$carrera' => $this->carrera,
            ]);

        }

        return redirect()->route('hp.centro');
    }

    

}
