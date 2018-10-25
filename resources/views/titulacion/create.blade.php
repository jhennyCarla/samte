{{-- @extends('layout.master') --}}
{{-- @section('contenido') --}}
<div class="row">
	<!-- <div class="col-md-4 ml-auto mr-auto"> -->
	<div class="card">
		<div class="card-header card-header-primary text-center">
			<p>MODALIDAD: {{ $modalidad->nombre_modalidad }}</p>
				
		</div>
		<div class="card-body">
			
			{!! Form::open(['route'=>'titulacion.store','method'=>'POST']) !!}
			{{ csrf_field() }}
			<input type="hidden" name="id_modalidad" value="{{ $modalidad->id }}">
			<input type="hidden" name="nombre_modalidad" value="{{ $modalidad->nombre_modalidad }}">
					<h5>Informacion de l(os) Estudiante(s)</h5>
					<hr class="lineaHorizontal">
					@include('titulacion.partials.formInfoEstudiante')
				
				@if($modalidad->nombre_modalidad=="PROYECTO DE GRADO" or $modalidad->nombre_modalidad=="TRABAJO DIRIGIDO" or $modalidad->nombre_modalidad=="ADSCRIPCION" or $modalidad->nombre_modalidad=="TESIS" or $modalidad->nombre_modalidad=="TRABAJO DE INTERNADO")
					<h5>Informacion de Tesis</h5>
					<hr class="lineaHorizontal">
					@include('titulacion.partials.formInfoTesis')
				
					@if($modalidad->nombre_modalidad=="TRABAJO DIRIGIDO" or $modalidad->nombre_modalidad=="ADSCRIPCION" or $modalidad->nombre_modalidad=="TRABAJO DE INTERNADO")
						<div class="form-group row">
							{!! Form::label('empresa','* Empresa:',['class'=>'col-md-2'])!!}
							<div class="col-md-5">
							{!! Form::text('empresa',null,['placeholder' => 'Ingrese su nombre', 'class'=>'form-control']) !!}
						</div>
						</div>
					@endif
					<div id="mostrarTodo" style="display:none;">
						<h5>Informacion de Los Tribunales</h5>
						<hr class="lineaHorizontal">
							@include('titulacion.partials.formInfoTribunales')
						
						<h5>Informacion de La defensa de tesis</h5>
						<hr class="lineaHorizontal">
						@include('titulacion.partials.formInfoDefensa')
					</div>
				@endif

				@if($modalidad->nombre_modalidad=="EXCELENCIA ACADEMICA" or $modalidad->nombre_modalidad=="RENDIMIENTO ACADEMICO" or $modalidad->nombre_modalidad=="PTAANG")
					{{-- <div class="text-center">
						<button class="btn btn-warning btn-md" href="#" data-target="#buscarEstudiante2" data-toggle="modal" id="buscar2" type="button"><i class="fa fa-user"></i> Agregar Estudiante</button>
						</div>
						<br>
						<div id="mostrarDatos2" >	
					</div> --}}
				
					@if($modalidad->nombre_modalidad=="EXCELENCIA ACADEMICA" or $modalidad->nombre_modalidad=="RENDIMIENTO ACADEMICO" )
						<h5 class="text-lowercase">Informacion {{ $modalidad->nombre_modalidad}}</h5>
						<hr class="lineaHorizontal">
						<div class="form-group row">
							{!! Form::label('numero_resolucion','Nº Resolución:', ['class'=>'col-md-2']) !!}
							<div class="col-md-10">
							{!! Form::text('numero_resolucion',null,['placeholder' => 'Ingrese el numero de Resolución','class'=>'form-control']) !!}
							</div>
						</div>
						<div class="form-group row">
							{!! Form::label('fecha_resolucion','Fecha Resolución:',['class'=>'col-md-2'])!!}
							<div class="col-md-3">
							{!! Form::date('fecha_resolucion', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
							</div>
							{!! Form::label('autoridad','Autoridad:',['class'=>'col-md-2'])!!}
							<div class="col-md-5">
								<select name="autoridad" class="form-control" id="decano" >
	        				<option value='-1'>Seleccione</option>
				            @foreach ($funcionDecano as $decano)
				          <option value="{{$decano->id_us_sig_sub_rol}}" class="edit{{$decano->id}}">{{$decano->nombre_completo_user}}</option>
				            @endforeach
				            <input type="hidden" name="autoridad_funcion" value="{{ $decano->id}}">      
	    					</select>
							</div>
						</div>
					@endif

					@if($modalidad->nombre_modalidad=="PTAANG")
						<h5>Informacion Ptaang</h5>
						<hr class="lineaHorizontal">
						@include('titulacion.partials.formPtaang')
					@endif
				@endif

				<div class="text-center">
					{!! Form::button('Crear Nueva Acta',['type'=> 'submit','class'=>'btn btn-primary'])!!}
				</div>
			{!! form::close() !!}
		</div>                           
	</div>
</div>

 @include('titulacion.partials.modals')

{{-- @endsection --}}

