<div>

    {{-- The Master doesn't talk, he acts. --}}

    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="align-self-center">

          <h1>Registro de Carreras dsegun el Centro Educativo</h1>
            <form>
                <div class="form-group">
                    <label for="carrera">Nombre de la Carrera</label>
                    <input type="text" class="form-control @error("carrera") is-invalid @enderror" id="carrera" wire:model.lazy="carrera">

                    @error("carrera")
                      <small class="text-danger">{{$message}}</small>
                    @enderror

                  </div>
                 
                  <div class="form-group">
                    <label for="centro">Centro</label>
                    <select class="form-select" aria-label="Default select example" wire:model="centro">
                      <option selected>Seleccione</option>
                      @foreach ($centros as $centro)
                        <option value="{{$centro->id}}">{{$centro->nombre_centro}}</option>
                      @endforeach
                    </select>
  
                    @error("centro")
                      <small class="text-danger">{{$message}}</small>
                    @enderror
  
                  </div>
  
                
                <div class="d-flex justify-content-center align-items-center" role="toolbar" aria-label="Toolbar with button groups" style="height: 20vh;">
                  
                  <div class="btn-group me-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-success align-self-center" style="align-content  :center " wire:click="guardar_carrera">{{$this->edit == true ? "Actualizar" : "Guardar"}}</button>
                  </div>
                  <div class="btn-group me-2" role="group" aria-label="Second group">
                    <a type="button" class="btn btn-danger align-self-center" style="align-content:center" href="{{route('hp.carrera')}}">Cancelar </a>
                  </div>
                               
                </div>
                  
            </form>
        </div>
      </div>
</div>


</div>

</div>
