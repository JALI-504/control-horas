<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ControlHorasPracticante;
use App\Http\Livewire\Practicantes;
use App\Http\Livewire\PracticanteCreate;
use App\Http\Livewire\Horas;
use App\Http\Livewire\HorasCreate;
use App\Http\Livewire\Centros;
use App\Http\Livewire\CentrosCreate;
use App\Http\Livewire\Supervisores;
use App\Http\Livewire\SupervisorsCreate;
use App\Http\Livewire\Carreras;
use App\Http\Livewire\CarrerasCreate;
use App\Http\Livewire\Constancias;
use App\Http\Livewire\Roles;
use Illuminate\Support\Facades\Auth;


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
    Route::get('update/{id}', HorasCreate::class)->name('hp.hora_update')->middleware('auth');
});

Route::prefix('centros')->group(function () {
    Route::get('index', Centros::class)->name('hp.centro')->middleware('auth');
    Route::get('create', CentrosCreate::class)->name('hp.centro_create')->middleware('auth');
    Route::get('update/{id}', CentrosCreate::class)->name('hp.centro_update')->middleware('auth');
});

Route::prefix('supervisores')->group(function () {
    Route::get('index', Supervisores::class)->name('hp.sup')->middleware('auth');
    Route::get('create', SupervisorsCreate::class)->name('hp.sup_create')->middleware('auth');
    Route::get('update/{id}', SupervisorsCreate::class)->name('hp.sup_update')->middleware('auth');
});

Route::prefix('carreras')->group(function () {
    Route::get('index', Carreras::class)->name('hp.carrera')->middleware('auth');
    Route::get('create', CarrerasCreate::class)->name('hp.carrera_create')->middleware('auth');
    Route::get('update/{id}', CarrerasCreate::class)->name('hp.carrera_update')->middleware('auth');
});

Route::get('imprimir', Constancias::class)->name('hp.contacia')->middleware('auth');

Route::get('roles', Roles::class)->name('hp.roles')->middleware('auth');
