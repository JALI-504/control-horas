

<div>

    {{-- Success is as dangerous as failure. --}}
    <h1>Constancia Culminacion de Practica Profesional {{ auth()->user()->name }}</h1>
   
    <hr>
    <div class="contenido">
        <p id="primero">
            Ing.<strong> {{ $supervisores[0]->nombre_sup }} </strong>
        </p>
        <p id="segundo">
            Por medio de la presente se <strong><u>HACE CONSTAR QUE:</u></strong>
            <br>
            <br>
                El jovenn <strong><u> {{ auth()->user()->name }},</u></strong> estudiante de la <strong><u> {{ $centros[0]->nombre_centro }}</u></strong>, de la carrera de<strong><u> {{ $carreras [0]->carrera }}</u></strong>, ha cumplido satisfactoriamente con las actividades asignadas para la prestación de la Práctica Profesional en el proyecto
            en el departameto de TI, en el periodo comprendido del día FECHA DE INICIO, al día FECHA DE
            TÉRMINO, acumulando un total de <strong><u>800 horas</u></strong>.
        </p>
        <p id="tercero">
            La presente se extiende a petición del interesado para los fines legales que a él convengan, en la ciudad de
            de Danlí, departamento de El Paraíso.  
        </p>
        <hr style="border: none; height: 1px; background-color: rgba(236, 225, 225, 0.8); align-content: center">
        <p style="text-align: center">
        
        </p>

         <div style="text-align: center; margin-top: 10%">
            <hr style="height: 2px; background-color: #000000; width: 18%; margin: auto;">
            <strong>Firma y sello</strong>
          </div>
          
          
    </div>

</div>

