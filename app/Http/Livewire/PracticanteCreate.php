<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class PracticanteCreate extends Component
{
    public $User;
    public $edit = false;

    public $nombre="";
    public $telefono="";
    public $email="";
    public $residencia="";
    public $carrera="";

    protected $rules = [
        'nombre' => 'required|min:5|max:50', 
        'telefono' => 'required|numeric|min:8',
        'email' => 'required|email',
        'residencia' => 'required|min:5|max:250',
        'carrera' => 'required|min:5|max:250',
    ];

    protected $messages = [
        'nombre.required' => 'Este campo debe deser oblicatorio.',
        'nombre.min' => 'El nombre no debe ser menor de 8 caracteres.',
        'nombre.max' => 'El nombre no debe de ser mayor de 50 caracteres.',

        'telefono.required' => 'Este campo debe de ser obligatorio.',
        'telefono.min' => 'El telefono no debe ser menor de 8 numeros.',
        'telefono.numeric' => 'Este campo solo acepta numeros',

        'email.required' => 'Este campo debe de ser obligatorio.',
        'email.email' => 'Agregue un @ y un dominio',

        'residencia.required' => 'Este campo debe deser oblicatorio.',
        'residencia.min' => 'Debe ser menor de 8 caracteres.',
        'residencia.max' => 'Debe de ser mayor de 250 caracteres.',

        'carrera.required' => 'Este campo debe deser oblicatorio.',
        'carrera.min' => 'Debe ser menor de 8 caracteres.',
        'carrera.max' => 'Debe de ser mayor de 250 caracteres.',
      
    ];

    
    public function mount($id=null){
        if ($id != null) {
            $this->edit = true;

            $this->User = User::find($id);

            $this->nombre= $this->User->name;
            $this->telefono=$this->User->tel;
            $this->email=$this->User->email;
            $this->residencia=$this->User->residencia;
            $this->carrera=$this->User->carrera;
        }

    }

    public function render()
    {
        return view('livewire.Practicante-create')
        ->extends('layouts.layout')
        ->section('content');
    }

    public function guardar(){

        $this->validate();

        if ($this->edit == true) {

            $this->User->nombre = $this->nombre;
            $this->User->tel = $this->telefono;
            $this->User->email = $this->email;
            $this->User->residencia = $this->residencia;
            $this->User->carrera = $this->carrera;

            $this->User->save();

        }else {
            $Practicante = User::create([
                'nombre' => $this->nombre,
                'tel' => $this->telefono,
                'email' => $this->email,
                'residencia' => $this->residencia,
                'carrera' => $this->carrera,
            ]);
        }

        return redirect()->route('hp.practicante');
    }


}

