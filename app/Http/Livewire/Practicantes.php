<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Practicante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Practicantes extends Component
{

        public function render()
        {
            return view('livewire.practicantes', [
                'practicantes' => Practicante::all()
            ])
            ->extends('layouts.layout')
            ->section('content');
        }
    
        public function delete($id){
            
            // dd($id);
    
            $Practicante = Practicante::find($id);
            
            $Practicante->delete();
    
            return redirect()->route('hp.practicante');
        }

        public function cerrarSession(Request $request){
            Auth::logout();
        
            $request->session()->invalidate();
        
            $request->session()->regenerateToken();

            return redirect('login');
        }
    }
    