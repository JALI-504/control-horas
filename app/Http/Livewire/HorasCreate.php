<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Hora;
use DateTime;
use Illuminate\Support\Facades\Auth;

class HorasCreate extends Component
{

    public $Hora;
    public $edit = false;
    public $fecha="";
    public $hora_inicio="";
    public $hora_final="";
    public $hora_total="";

    protected $rules = [
        'fecha' => 'required', 
        'hora_inicio' => 'required',
        'hora_final' => 'required',
    ];

    protected $messages = [
        'fecha.required' => 'Este campo debe deser oblicatorio.',
        'hora_inicio.required' => 'Este campo debe de ser obligatorio.',
        'hora_final.required' => 'Este campo debe de ser obligatorio.',
    ];

    
    public function mount($id=null){
        if ($id != null) {
            $this->edit = true;
            
            $this->Hora = Hora::find($id);

            $this->fecha= $this->Hora->fecha;
            $this->hora_inicio=$this->Hora->hora_inicio;
            $this->hora_final=$this->Hora->hora_final;
            $this->hora_total=$this->Hora->hora_total;
        }

    }

    public function render()
    {
        return view('livewire.horas-create')
        ->extends('layouts.layout')
        ->section('content');

    }

    // Computed Property
    public function getTotalHorasProperty()
    {
        $hora_inicio = new DateTime($this->hora_inicio);
        $hora_final = new DateTime($this->hora_final);

        $interval = $hora_inicio->diff($hora_final);

        return $interval->format('%H:%I:%S ');
    }


    public function guardar_hora(){

        $this->validate();
        

        if ($this->edit == true) {

            $this->Hora->fecha = $this->fecha;
            $this->Hora->hora_inicio = $this->hora_inicio;
            $this->Hora->hora_final = $this->hora_final;
            $this->Hora->hora_total = $this->total_horas;

            $this->Hora->save();

        }else {
            $hora = Hora::create([
                'user_id' => Auth()->user()->id,
                'fecha' => $this->fecha,
                'hora_inicio' => $this->hora_inicio,
                'hora_final' => $this->hora_final,
                'hora_total' => $this->total_horas
            ]);

        }

        return redirect()->route('hp.hora');
    }

    

}
