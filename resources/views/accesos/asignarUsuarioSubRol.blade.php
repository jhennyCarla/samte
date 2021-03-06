@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="card">
		<div class="card-header card-header-primary text-center text-muted"><h5>BUSCAR ACCESOS DE USUARIO</h5></div>
		<div class="card-body">
				{!! Form::open(array('route' => array('accesos.index'), 'method' =>'get'), array('role'=>'form')) !!}
				@include('accesos.lista')
				{!! Form::close() !!}
				<br>
				@if($usuarios!='vacio')
					<ul class="pagination justify-content-center">{{ $usuarios->render("pagination::bootstrap-4") }}</ul>
				<div class="table-responsive">
							
					<table class="table table-condensed table-bordered  table-sm">
						<thead>
							<tr class=" table-info">
								<th class="text-center">ID</th>
									<th class="text-center">DOC INDENTIDAD</th>
									<th class="text-center">USUARIO</th>
									<th class="text-center">SUB-ROLES ASIGNADOS</th>
									<th class="text-center">AÑADIR NUEVO SUB-ROL</th>
							</tr>
						</thead>
						<tbody>
								@foreach($usuarios as $usuario)
									<tr>
										<td>{{ $usuario->id }}</td>
										<td>{{ $usuario->doc_identidad }}</td>
										<td>{{ $usuario->NombreCompleto }}</td>
										<td>
											@foreach($permisosAsignados as $permisos)
												<table>
													<tr>
														@if($permisos->id_usuario == $usuario->id)
															<td>
																Rol: {{ $permisos->sub_rol->rol->nombre_rol }}<br>
																Sub-Rol: {{ $permisos->sub_rol->nombre_sub_rol	 }}<br>
																Unidad: {{ $permisos->unidad->nombre_unidad	 }}<br>
																Funcion: {{ $permisos->funcion->nombre_funcion	 }}<br>
																Periodo: desde {{ $permisos->fecha_inicio	 }} hasta {{ $permisos->fecha_fin  }} <br>
																Activo:{{ $permisos->activo}} 
																	@if($permisos->activo=='SI')
														<a href="{{ route('accesos.modActivo',$permisos->id)}}" role="button" class="btn btn-danger btn-responsive btn-sm"><i class="fa fa-close"></i> Desactivar</a>
														@else
															<a href="{{ route('accesos.modActivo',$permisos->id)}}" role="button" class="btn btn-success btn-responsive btn-sm"><i class="fa fa-plus"></i> Activar</a>
													@endif 
															<td><a href="{{ route('accesos.modificarAsignacion',$permisos->id)}}" role="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Modificar</a></td>
															</td>
														@endif
													</tr>
												</table>
											@endforeach
										</td>
										<td class="text-center rowspan="1"><a href="{{ route('accesos.nuevaAsignacion', $usuario->id) }}" role="button" class="btn btn-primary btn-responsive"><i class="fa fa-plus"></i> Nueva Asignacion</a></td>
									</tr>
								@endforeach
						
						</tbody>
					</table>
				</div><!--cierre table responsive-->
				@endif
			</div><!--cierre panel body-->
		</div><!--cierre CARD-->
	</div>
</div>
@endsection