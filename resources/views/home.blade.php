@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="align-self-center">

            <H1>CONTROL HORAS PRACTICANTE</H1>

            {{-- <button type="button" class="btn btn-success align-self-center" style="align-content  :center " wire:click="guardar">{{$this->edit == true ? "Actualizar" : "Guardar"}}</button> --}}

            <button type="button" class="btn btn-success align-self-center" style="align-content:center " >Practicantes</button>

        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
