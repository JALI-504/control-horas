<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ControlHorasPracticante;
use App\Http\Livewire\Horas;
use App\Http\Livewire\Practicantes;
use App\Http\Livewire\PracticanteCreate;
use App\Http\Livewire\HorasCreate;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::get('hp', ControlHorasPracticante::class)->name('hp.index');
// Route::get('clientes/create', ClientesCreate::class)->name('clientes.create');
// Route::get('clientes/update/{id}', ClientesCreate::class)->name('clientes.update');

Auth::routes([
    'register' => true,
]);

Route::get('/', ControlHorasPracticante::class)->name('hp.index')->middleware('auth');


Route::prefix('practicantes')->group(function () {
    Route::get('index', Practicantes::class)->name('hp.practicante')->middleware('auth');
    Route::get('create', PracticanteCreate::class)->name('hp.create')->middleware('auth');
    Route::get('update/{id}', PracticanteCreate::class)->name('hp.update')->middleware('auth');
});

Route::prefix('horas')->group(function () {
    Route::get('index', Horas::class)->name('hp.hora')->middleware('auth');
    Route::get('create', HorasCreate::class)->name('hp.hora_create')->middleware('auth');
    Route::get('update/{id}', HorasCreate::class)->name('hp.Hora_update')->middleware('auth');
});
