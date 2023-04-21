<div>
    {{-- Do your work, then step back. --}}
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="align-self-center">

          <h1>Registrar Horas</h1>
            <form>
                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input type="date" class="form-control @error("fecha") is-invalid @enderror" id="fecha" wire:model.lazy="fecha">

                    @error("fecha")
                      <small class="text-danger">{{$message}}</small>
                    @enderror

                  </div>
                  <div class="form-group">
                    <label for="hora_inicio">Hora de Inicio</label>
                    <input type="time" class="form-control @error("hora_inicio") is-invalid @enderror"
                    maxlength="8"
                    max="99999999"
                    id="hora_inicio" wire:model.lazy="hora_inicio">

                    @error("hora_inicio")
                    <small class="text-danger">{{$message}}</small>
                    @enderror

                  </div>
                <div class="form-group">
                  <label for="hora_final">Hora Final</label>
                  <input type="time" class="form-control @error("hora_final") is-invalid @enderror" id="hora_final"  wire:model.lazy="hora_final">

                  @error("hora_final")
                  <small class="text-danger">{{$message}}</small>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="horas_total">Horas Totales</label>
                    <input type="text" class="form-control @error("horas_total") is-invalid @enderror" id="horas_total" value="{{$this->total_horas}}" disabled>

                    @error("horas_total")
                      <small class="text-danger">{{$message}}</small>
                    @enderror

                  </div>
                
                <div class="d-flex justify-content-center align-items-center" role="toolbar" aria-label="Toolbar with button groups" style="height: 20vh;">
                  
                  <div class="btn-group me-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-success align-self-center" style="align-content  :center " wire:click="guardar_hora">{{$this->edit == true ? "Actualizar" : "Guardar"}}</button>
                  </div>
                  <div class="btn-group me-2" role="group" aria-label="Second group">
                    <a type="button" class="btn btn-danger align-self-center" style="align-content:center" href="{{route('hp.hora')}}">Cancelar </a>
                  </div>
                               
                </div>
                  
            </form>
        </div>
      </div>
</div>

</div>
