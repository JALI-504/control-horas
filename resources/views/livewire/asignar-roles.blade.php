<div>
    {{-- In work, do what you enjoy. --}}

    <div>       

        <div class="d-flex">  
            <div class=" me-4">
              <h1>Asignar Roles</h1>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
                <p class="h5">Nombre: </p>
                <p class="form-control" style="width: 50%">{{ auth()->user()->name }}</p>     

                {!! Form::model($user, ['route' => ['hp.roles', $user], 'method' => 'put'])!!}

                @foreach ($roles as $rol )

                <div>
                    <label>
                        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                        {{$role->name}}
                    </label>
                </div>
                    
                @endforeach

                {{!! Form::close() !!}}

                
            </div>
        </div>
    
    </div>
    
</div>
