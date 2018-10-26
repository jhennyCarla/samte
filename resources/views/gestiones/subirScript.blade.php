@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="card">
  			<div class="card-header card-header-primary text-center text-muted"><h5>SUBIR SCRIPT CSV</h5></div>
			<div class="card-body">
				{!! Form::open(array('route'=>'gestiones.importarScript','method' => 'POST','files'=>'true')) !!}
					{!! csrf_field() !!}
					@include('gestiones.partials.formInscribirCsv')
				{!! Form::close() !!}
				<br>
				<br>
				<br>
				<p><strong>IMPORTANTE:</strong>Para trabajar con este módulo recordar lo siguiente:<br>
				1.- Debe haberse cargado primero el archivo de estudiantes inscritos en la gestión correspondiente.<br>
				2.- Cargar el archivo en formato XLS,XLSX O CSV conteniendo la siguiente informacion<br>
				CABECERA:cod_estudiante;ci;apellidos;nombres;fecha_nac;genero;planGestion;nombrePlan;nivel;materia;tipoMateria;GRUPO;docente;ciDoc;nombredocente;apellidodocente;generoDocente;fechaNacDoc;tituloDocente<br>
				DATOS:200634242;7999066;ABREGO ALANES;ANAHI;26/01/1994;F;126091;LICENCIATURA EN INGENIERIA FINANCIERA; A; 1302212; INTRODUCCION;N ;22 ;200800141;2849484;CARLOS ALFREDO;M;1960.11.03;LIC.;</p>
			</div>
		</div>
	</div>
</div>

@endsection

