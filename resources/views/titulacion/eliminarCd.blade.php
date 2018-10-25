@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="card">
		<div class="card-header card-header-primary text-center"><h5>ELIMINAR CD</h5></div>
		<div class="card-body">
			<div class="container">
				{!! Form::open(array('route' => array('titulacion.registrarCd'), 'method' =>'get'), array('role'=>'form')) !!}
				<div class="form-group row">
					{!! Form::label('anio','*Año:',['class'=>'col-md-3 text-right']) !!}
					<div class="col-md-2">
						{!! Form::select('anio',array(date('Y')=>date('Y'),date('Y')+1=>date('Y')+1,date('Y')+2=>date('Y')+2),null,['class'=>'form-control ']) !!}
					</div>
					{!! Form::label('periodo','*Periodo:',['class'=>'col-md-2 text-right']) !!}
					<div class="col-md-1">
						{!! Form::select('periodo',array('1'=>'1','2'=>'2'),null,['class'=>'form-control ']) !!}
					</div>
				</div>
				<div class="form-group row">
					{!! Form::label('carrera','*Carrera:',['class'=>'col-md-2 text-center']) !!}
					<div class="col-sm-7">
						{!! Form::select('carrera',$planes->pluck('nombre_plan','id'),null,['class'=>'form-control ','placeholder'=>'Seleccione']) !!}
					</div>
				</div>
			</div>
			<h6>Busqueda del(os) Estudiante(s)</h6>
			<hr class="lineaHorizontal">
		<!--BUSCADOR DE USUARIO-->
			@include('accesos.lista')
			{!! Form::close() !!}
			<div class="col-sm-2">
				<a href="#" role="button" class="btn btn-success">ELIMINAR CD</a>
			</div>
		</div>   
		<!--FIN DE BUSCADOR--> 
								   
		@if($usuarios!='vacio')
		<ul class="pagination justify-content-center">{{ $usuarios->render("pagination::bootstrap-4") }}</ul>
		<div class="container-fluid">
		<table class="table table-sm table-hover table-bordered table-condensed table-striped table-responsive-lg" id="mytable">
			<thead>
				<tr class="table-primary text-center">
					<th>Nro</th>
					<th>COD SIS</th>
					<th>NOMBRE USUARIO</th>
					<th>MATERIA</th>
					<th>CARRERA</th>
					<th>ELIMINAR CD</th>
				</tr>
			</thead>               
			<tbody>
				@foreach($usuarios as $key=>$usuario)
				<tr>
					<td>{{ ++$key }}</td>
					<td>{{ $usuario->cod_sis }}</td>
					<td>{{ $usuario->NombreCompleto  }}</td>
					<td>{{ $usuario->nombre_materia }}</td>
					<td>{{ $usuario->nombre_plan }} </td>
					<td class="text-center">
						{!! Form::open(array('route' =>array('titulacion.quitarCd',$usuario->id_defensa),'method'=>'delete')) !!}
							{!! Form::button('<i class="fa fa-times"></i>', array('type'=> 'submit','class'=>'btn btn-danger','onclick' => 'return confirm("¿Estas Seguro que desea eliminar el Registro de Cd?")','data-toggle'=>'tooltip','data-placement'=>'top','title'=>'Eliminar Cd')) !!}
						{!! Form::close() !!}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		</div>
		<ul class="pagination justify-content-center">{{ $usuarios->render("pagination::bootstrap-4") }}</ul>
	@endif        	                     
	</div>
</div>
</div>
@endsection
