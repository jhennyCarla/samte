@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="card">
  			<div class="card-header card-header-primary text-center text-muted"><h5>ASIGNACIONES QUE TIENE EL USUARIO</h5></div>
	  		<div class="card-body">
			  	<div class="table-responsive">
					<table class=" table-sm table table-condensed table-striped table-bordered">
						<thead>
							<tr class="text-center table-info">
								<th class="text-center">Nº</th>
								<th class="text-center">ROL</th>
								<th class="text-center">SUB ROL</th>
								<th class="text-center">CODIGO</th>
								<th class="text-center">FUNCION</th>
								<th class="text-center">UNIDAD</th>
								<th class="text-center">FECHA INICIO</th>
								<th class="text-center">FECHA FIN</th>
								<th class="text-center">ACTIVO</th>
							</tr>
						</thead>
						<tbody>
							@foreach($permisosAsignados as $permisos)
								<tr>
									<td></td>
									<td>{{ $permisos->sub_rol->rol->nombre_rol}}</td>
									<td>{{ $permisos->sub_rol->nombre_sub_rol}}</td>
									<td class="text-center">
										@if(!is_null($permisos->cod_sis))
			                {{ $permisos->cod_sis}}
			              @else
			                <h4>--</h4>
			             	@endif 
									</td>
									<td>{{ $permisos->unidad->nombre_unidad	}}</td>
									<td>{{ $permisos->funcion->nombre_funcion}}</td>
									<td class="text-center">{{ $permisos->fecha_inicio}}</td>
									<td class="text-center">{{ $permisos->fecha_fin}}</td>
									<td class="text-center">{{ $permisos->activo}}</td>
								</tr>
							@endforeach	
						</tbody>
					</table>
				</div>
			</div><!--panel card body-->
		</div><!--panel card-->
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="card">
  			<div class="card-header card-header-primary text-center text-muted"><h5>NUEVA ASIGNACION USUARIO</h5></div>
	  		<div class="card-body">
				{!! Form::open(array('route' => array('accesos.validarNuevaAsignacion',$permisoUsuario->usuario->id), 'method' =>'get'), array('role'=>'form')) !!}
					{!! Form::label('ci','Documento de Identidad:') !!}
					{!! Form::label('ci',$permisoUsuario->usuario->doc_identidad ) !!}</br>
					{!! Form::label('nombre','Nombre de Usuario:') !!}
					{!! Form::label('nombre',$permisoUsuario->usuario->nombre_completo) !!}
					<hr>
					@include('errores.msjError')
					<div class="form-group row">
						{!! Form::label('subRol','ROL/SUB-ROL:',['class'=>'col-md-2']) !!}
						<div class="col-md-10">
							{!! Form::select('subRol',$subRol->pluck('rol_sub_rol','id'),null, ['id'=>'id','placeholder' => 'Seleccione','class'=>'form-control'])!!}
						</div>
					</div>
					  
					<div class="form-group row">
						{!! Form::label('funcion','FUNCIÓN:',['class'=>'col-md-2']) !!}
						<div class="col-md-10">
							{!! Form::select('funcion',$funcion->pluck('nombre_funcion','id'),null, ['id'=>'id','placeholder' => 'Seleccione','class'=>'form-control'])!!}
						</div>
					</div>

					<div class="form-group row">
						{!! Form::label('unidad','UNIDAD:',['class'=>'col-md-2']) !!}
						<div class="col-md-10">
						  {!! Form::select('unidad',$unidad->pluck('nombre_unidad','id'),null, ['id'=>'id','placeholder' => 'Seleccione','class'=>'form-control'])!!}
						</div>
					</div>

					<div class="form-group row">
						{!! Form::label('sis','COD SIS:',['class'=>'col-md-2']) !!}
						<div class="col-md-10">
							{!! Form::text('sis',null,array('placeholder'=>'CODSIS','class'=>'form-control')) !!}
						</div>
					</div>

					<div class="form-group row">
		        		{!! Form::label('fecha_inicio','* Fecha Inicio:',['class'=>'col-md-2 control-label']) !!}
				        <div class="col-md-4">
				        	{!! Form::text('fecha_inicio','',array('placeholder'=>'Fecha Inicio Gestion','required'=>'required','id'=>'fecha-inicio','readonly'=>'readonly')) !!}
				        </div>
				          {!! Form::label('fecha_fin','* Fecha FIN:',['class'=>'col-md-2 control-label']) !!}
				        <div class="col-md-4">
				          {{-- {!! form::date('fecha_fin',null,['class'=>'form-control']) !!} --}}
				          {!! Form::text('fecha_fin','', array('placeholder'=>'Fecha Fin Gestion','id' => 'fecha-fin', 'data-date-format' => "dd-mm-yyyy",'readonly'=>'readonly')) !!}
				        </div>       
		      		</div>

			    	<div class="form-group row">
			    		{!! Form::label('activo','SUB-GRUPO ACTIVO PARA EL USUARIO',['class'=>'col-md-5']) !!}
			    		<div class="col-md-2">
			    			{!! Form::select('activo',['SI'=>'SI','NO'=>'NO'],'SI',array('class'=>'form-control'))!!}

			    		</div>
							
						<div class="text-center col-md-3">
								{!! Form::button(' <i class="fa fa-address-book"></i> Asignar Nuevo Sub-Rol', array('type'=> 'submit','class'=>'btn btn-success'))!!}
						</div>
						<div class="text-center col-md-2">
							<a href="{{ route('accesos.index') }}" role="button" class="btn btn-danger"><i class="fa fa-close"></i> Cancelar</a>
						</div>
					</div>
				{!! Form::close() !!}
			</div><!--cierre card body-->
		</div><!--cierre card-->
	</div>
</div>
@endsection