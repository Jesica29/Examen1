@extends('templates.administrador')

@section('content')

<div class="container"> 
    <div class="content">
    <center><th><h4>MASCOTAS</h4> </th>   </center>   
    	<div class="row">
			<center><div class="input-field col s6">
				Nombre: <?=$mascotas['nombre']?><br>
			    Edad: <?=$mascotas['edad']?><br>
				Tipo: <?=$mascotas['tipo']?><br>
				Color: <?=$mascotas['color']?><br>
				<a href="/Administrador/mascotas" class="waves-effect waves-light btn-large ">REGRESAR</a>
	        </div> </center>
	     </div>
       </div>
    </div>

@stop