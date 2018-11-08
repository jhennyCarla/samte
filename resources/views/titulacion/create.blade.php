<div class="row">
	<div class="card">
		<div class="card-header card-header-primary text-center">
			<p>MODALIDAD: {{ $modalidad->nombre_modalidad }}</p>	
		</div>
		<div class="card-body">
			{!! Form::open(['route'=>'titulacion.store','method'=>'POST']) !!}
			{{ csrf_field() }}
				<input type="hidden" name="id_modalidad" value="{{ $modalidad->id }}">
				<input type="hidden" name="nombre_modalidad" value="{{ $modalidad->nombre_modalidad }}">
				<h5>Información de l(os) Estudiante(s)</h5><hr class="lineaHorizontal">
				@include('titulacion.partials.formInfoEstudiante')
				
				@if($modalidad->nombre_modalidad=="PROYECTO DE GRADO" or $modalidad->nombre_modalidad=="TRABAJO DIRIGIDO" or $modalidad->nombre_modalidad=="ADSCRIPCION" or $modalidad->nombre_modalidad=="TESIS" or $modalidad->nombre_modalidad=="TRABAJO DE INTERNADO")
					<h5>Informacion de Tesis</h5><hr class="lineaHorizontal">
					@include('titulacion.partials.formInfoTesis')
				
					@if($modalidad->nombre_modalidad=="TRABAJO DIRIGIDO" or $modalidad->nombre_modalidad=="ADSCRIPCION" or $modalidad->nombre_modalidad=="TRABAJO DE INTERNADO")
						<div class="form-group row">
							{!! Form::label('empresa','* Empresa:',['class'=>'col-md-2'])!!}
							<div class="col-md-5">
							{!! Form::text('empresa',null,['placeholder' => 'Ingrese su nombre', 'class'=>'form-control']) !!}
								@if($errors->has('empresa'))
									{!! $errors->first('empresa','<p class="rounded msjAlert">:message</p>') !!}
								@endif
							</div>
						</div>
					@endif
					<div id="mostrarTodo" style="display:none;">
						<h5>Información de Los Tribunales</h5><hr class="lineaHorizontal">
							@include('titulacion.partials.formInfoTribunales')
						
						<h5>Información de La defensa de tesis</h5><hr class="lineaHorizontal">
						@include('titulacion.partials.formInfoDefensa')
					</div>
				@endif

				@if($modalidad->nombre_modalidad=="EXCELENCIA ACADEMICA" or $modalidad->nombre_modalidad=="RENDIMIENTO ACADEMICO" or $modalidad->nombre_modalidad=="PTAANG")
					
					@if($modalidad->nombre_modalidad=="EXCELENCIA ACADEMICA" or $modalidad->nombre_modalidad=="RENDIMIENTO ACADEMICO" )
						<h5 class="text-lowercase">Información {{ $modalidad->nombre_modalidad}}</h5><hr class="lineaHorizontal">
						@include('titulacion.partials.formExcelencia')
					@endif

					@if($modalidad->nombre_modalidad=="PTAANG")
						<h5>Información Ptaang</h5><hr class="lineaHorizontal">
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

