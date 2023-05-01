<div>
    {{-- The whole world belongs to you. --}}
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="align-self-center">

          <h1>Registro de Centros</h1>
            <form>
                <div class="form-group">
                    <label for="nombre_centro">Nombre del Centro</label>
                    <input type="text" class="form-control @error("nombre_centro") is-invalid @enderror" id="nombre_centro" wire:model.lazy="nombre_centro">

                    @error("nombre_centro")
                      <small class="text-danger">{{$message}}</small>
                    @enderror

                  </div>

                
                <div class="d-flex justify-content-center align-items-center" role="toolbar" aria-label="Toolbar with button groups" style="height: 20vh;">
                  
                  <div class="btn-group me-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-success align-self-center" style="align-content  :center " wire:click="guardar_centro">{{$this->edit == true ? "Actualizar" : "Guardar"}}</button>
                  </div>
                  <div class="btn-group me-2" role="group" aria-label="Second group">
                    <a type="button" class="btn btn-danger align-self-center" style="align-content:center" href="{{route('hp.centro')}}">Cancelar </a>
                  </div>
                               
                </div>
                  
            </form>
        </div>
      </div>
</div>


</div>
