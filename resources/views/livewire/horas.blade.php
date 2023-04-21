<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="d-flex">
        <div class=" me-4">
          <h1>CONTROL DE HORAS:</h1>
        </div>
        <div>
          <a class="btn btn-outline-success mt-2 ml-4
            " 
           href="{{route('hp.hora_create')}}">Crear</a>
        </div>
      </div>
        
      <table class="table table-dark table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              {{-- <th scope="col">Nombre</th> --}}
              <th scope="col">Fecha</th>
              <th scope="col">Hora Inicio</th>
              <th scope="col">Hora Final</th>
              <th scope="col">Total Horas</th>
              <th scope="col">Editar</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($horas as $hora)
            <tr>
              <th scope="row">{{ $loop->index + 1 }}</th>
              <td>{{$hora->fecha}}</td>
              <td>{{$hora->hora_inicio}}</td>
              <td>{{$hora->hora_final}}</td>   
              <td>{{$hora->hora_total}}</td>   
              <td>
                <a class
                ="btn btn-outline-warning mt-1 ml-2" style="ali" href="{{route('hp.Hora_update', ['id' => $hora->id])}}">Editar</a>
              </td>
              <td>
                
                <button class="btn btn-outline-danger mt-1 ml-2" style="ali" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</button>
                  
                <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-black" id="exampleModalLabel" style="color: black">Eliminar hora</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body"  style="color: black">
                      <p>¿Desea eliminar el regitro de horas?</p> 
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                      <button type="button" class="btn btn-outline-primary" wire:click="delete({{$hora->id}})">Eliminar</button>
                    </div>
                  </div>
                </div>
              </div>
    
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
</div>
