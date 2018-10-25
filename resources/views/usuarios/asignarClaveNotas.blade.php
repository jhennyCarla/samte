@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="card">
			<div class="card-header card-header-primary text-center text-muted"><h5>ASIGNAR CLAVES PARA EL REGISTRO DE NOTAS</h5></div>
			{{ Form::open(array('route'=>array('tarjetas.asignar'), 'method'=>'POST'),array('role'=>'form')) }}
			<div class="card-body">
				<div class="row mx-auto" style="width: 1000px;" >
					<div class="col-md-8">
						<table class="table table-sm table-hover table-condensed table-bordered">
							<meta name="csrf-token" content="{{ csrf_token() }}">
							<input type="hidden" name="id" value="{{ $usuario->id }}">
							<tbody>
								<tr>
									<th class="table-info"  WIDTH="255">DOC IDENTIDAD USR</th>
									<td>{{ $usuario->doc_identidad }}</td>
								</tr>
								<tr>
									<th class="table-info">NOMBRE COMPLETO USR:</th>
									<td class="text-uppercase">{{ $usuario->nombreCompleto }}</td>
								</tr>
								<tr>
									<th class="table-info">ID TARJETA DE CLAVES ACTUAL:</th>
									<td class="text-uppercase">
										@if(is_null($tarjeta))
										<input readonly="readonly" name="clave" id="clave" class="form-control" value="NO TIENE ASIGNADA NINGUNA CLAVE">
										@else
										<input readonly="readonly" name="clave" id="clave" class="form-control" name='tarjeta' value="{{ $tarjeta->id }}">
										{{-- {{ $tarjeta->id}} --}}
										@endif
									</input>
								</td>
							</tr>
							<tr>
								<th class="table-info">ASIGNAR NUEVA TARJETA DE CLAVES:</th>
								<td class="text-uppercase"><input type="text" name=" clave_nueva" class="form-control" id=clave_nueva></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-4">
					<img src="/img/img_avatar3.png" class="img-thumbnail img-responsive img-raised" width="200" height="130">
				</div> 
			</div>
			<br>
			<div class="text-center">
				<button class="btn btn-success" id="asignar"><i class="fa fa-key"></i> ASIGNAR CLAVES</button>
				<button class="btn btn-danger"><i class="fa fa-close"></i> CANCELAR TRABAJO</button>
			</div>
		</div>
		{{ Form::close() }}
	</div>
</div>
</div>

@endsection