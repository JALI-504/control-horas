<div>
    {{-- Stop trying to control. --}}
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="align-self-center">
            <form>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="name" class="form-control @error("nombre") is-invalid @enderror" id="nombre" wire:model.lazy="nombre">

                    @error("nombre")
                      <small class="text-danger">{{$message}}</small>
                    @enderror

                  </div>
                  <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="tel" class="form-control @error("telefono") is-invalid @enderror"
                    maxlength="8"
                    max="99999999"
                    id="telefono" wire:model.lazy="telefono">

                    @error("telefono")
                    <small class="text-danger">{{$message}}</small>
                    @enderror

                  </div>
                <div class="form-group">
                  <label for="email">Correo Electronico</label>
                  <input type="email" class="form-control @error("email") is-invalid @enderror" id="email"  wire:model.lazy="email">

                  @error("email")
                  <small class="text-danger">{{$message}}</small>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="residencia">Residencia</label>
                    <input type="text" class="form-control @error("residencia") is-invalid @enderror" id="residencia" wire:model.lazy="residencia">

                    @error("residencia")
                      <small class="text-danger">{{$message}}</small>
                    @enderror

                  </div>

                  <div class="form-group">
                    <label for="carrera">Carrera</label>
                    <input type="carrera" class="form-control @error("carrera") is-invalid @enderror" id="carrera" wire:model.lazy="carrera">

                    @error("carrera")
                      <small class="text-danger">{{$message}}</small>
                    @enderror

                  </div>
                
                <div class="d-flex justify-content-center align-items-center" role="toolbar" aria-label="Toolbar with button groups" style="height: 20vh;">
                  
                  <div class="btn-group me-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-success align-self-center" style="align-content  :center " wire:click="guardar">{{$this->edit == true ? "Actualizar" : "Guardar"}}</button>
                  </div>
                  <div class="btn-group me-2" role="group" aria-label="Second group">
                    <a type="button" class="btn btn-danger align-self-center" style="align-content:center" href="{{route('hp.practicante')}}">Cancelar </a>
                  </div>
                               
                </div>
                  
            </form>
        </div>
      </div>
</div>
