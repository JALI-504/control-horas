<div>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route("hp.index")}}">INICIO</a>
            <a class="navbar-brand" href="{{route("hp.practicante")}}">PRACTICANTE</a>
            <a class="navbar-brand" href="{{route("hp.hora")}}">HORAS</a>
            <a class="navbar-brand" href="{{route("hp.centro")}}">CENTROS</a>
            <a class="navbar-brand" href="{{route("hp.carrera")}}">CARRERAS</a>
            <a class="navbar-brand" href="{{route("hp.sup")}}">SUPERVISORES</a>
            

           
                <form class="d-flex">
                        <button wire:click="cerrarSession" class="btn btn-light">
                        <strong>Log Out</strong></button>
                </form>
        </div>
        </div>
    </nav>
</div>