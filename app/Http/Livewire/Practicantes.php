<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Http\Livewire\UsersTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;


class Practicantes extends Component
{

        public function render()
        {
            return view('livewire.practicantes', [
                'practicantes' => User::all()
            ])
            ->extends('layouts.layout')
            ->section('content');
        }
    
        public function delete($id){
            
            // dd($id);
    
            $Practicante = User::find($id);
            
            $Practicante->delete();
    
            return redirect()->route('hp.practicante');
        }
    }
    