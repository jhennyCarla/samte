@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="card">
  			<div class="card-header card-header-primary text-center text-muted"><h5>MODIFICACIÓN DE ASIGNACIÓN</h5></div>
		  	<div class="card-body">
					{!! Form::open(array('route' => array('accesos.validarModAsignacion',$permisoUsuario->id), 'method' =>'POST'), array('role'=>'form')) !!}
						<p><strong>DOCUMENTO DE IDENTIDAD:</strong> {{ $permisoUsuario->usuario->tipo_doc_identidad->nombre_tipo_doc_identidad}}: {{ $permisoUsuario->usuario->doc_identidad }}</p>
						<p><strong>NOMBRE DE USUARIO:</strong> {{ $permisoUsuario->usuario->nombre_completo}}</p>
						<hr>
						@include('errores.msjError')
							<div class="form-group row">
							  {!! Form::label('subRol','ROL/SUB-ROL:',['class'=>'col-md-2']) !!}
							  <div class="col-md-10">
							  	<select name="subRol" class="form-control">
										<option value={{$permisoUsuario->sub_rol->id}}>{{$permisoUsuario->sub_rol->RolSubRol}}</option>	
											@foreach ($subRol as $subRoles)	
												<option value="{{$subRoles->id}}">{{$subRoles->RolSubRol}}</option>
											@endforeach
									</select>
										{{--
							  	{!! form::select('subRol',$subRol,$permisoUsuario->id_sub_rol, array('placeholder'=>$permisoUsuario->sub_rol->RolSubRol)) !!}--}}
							  </div>
							</div>

							<div class="form-group row">
								{!! Form::label('funcion','FUNCIÓN:',['class'=>'col-md-2']) !!}
							  <div class="col-md-10">
									<select name="funcion" class="form-control">
										<option value={{ $permisoUsuario->funcion->id }}>{{ $permisoUsuario->funcion->nombre_funcion }}</option>	
											@foreach ($funcion as $funciones)	
												<option value="{{$funciones->id}}">{{$funciones->nombre_funcion}}</option>
											@endforeach
									</select>
							  </div>
							</div>

							<div class="form-group row">
								{!! Form::label('unidad','UNIDAD:',['class'=>'col-md-2']) !!}
							  <div class="col-md-10">
							    <select name="unidad" class="form-control">
										<option value={{ $permisoUsuario->unidad->id}}>{{ $permisoUsuario->unidad->nombre_unidad }}</option>	
											@foreach ($unidad as $unidades)	
												<option value="{{$unidades->id}}">{{$unidades->nombre_unidad}}</option>
											@endforeach
									</select>
							  </div>
							</div>

							<div class="form-group row">
								{!! Form::label('sis','COD SIS:',['class'=>'col-md-2']) !!}
								<div class="col-md-10">{!!Form::text('sis',$permisoUsuario->cod_sis, array('placeholder'=> $permisoUsuario->cod_sis, 'class' => 'form-control'))!!}
								</div>
							</div>

							<div class="form-group row">
			          {!! Form::label('fecha_inicio','* Fecha Inicio:',['class'=>'col-md-2 control-label']) !!}
			          <div class="col-md-4">
			          	{{-- {!! form::date('fecha_inicio', $permisoUsuario->fecha_inicio, array('placeholder'=>$permisoUsuario->fecha_inicio, 'class'=>'form-control')) !!} --}}
			          	{!! Form::text('fecha_inicio',$permisoUsuario->fecha_inicio,array('placeholder'=>$permisoUsuario->fecha_inicio,'required'=>'required','id'=>'fecha-inicio','readonly'=>'readonly')) !!}
			          </div>          
			          {!! Form::label('fecha_fin','* Fecha FIN:',['class'=>'col-md-2 control-label']) !!}
			          <div class="col-md-4">
			          	{{-- {!!form::date('fecha_fin', $permisoUsuario->fecha_fin,array('placeholder'=>$permisoUsuario->fecha_fin,'class'=>'form-control'))!!} --}}
			          	{!! Form::text('fecha_fin',$permisoUsuario->fecha_fin, array('placeholder'=>$permisoUsuario->fecha_fin,'id' => 'fecha-fin', 'data-date-format' => "dd-mm-yyyy",'readonly'=>'readonly')) !!}
			          </div>          
			       	</div>

							<div class="form-group row">
			    			{!! Form::label('activo','SUB-GRUPO ACTIVO PARA EL USUARIO',['class'=>'col-md-5']) !!}
								<div class="col-md-2">
									{!! Form::select('activo',['SI'=>'SI','NO'=>'NO'],'SI',array('class'=>'form-control'))!!}
								</div>
								<div class=" text-center col-md-3">
									{!! Form::button(' <i class="fa fa-edit"></i> editar Acceso', array('type'=> 'submit','class'=>'btn btn-success')) !!}
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