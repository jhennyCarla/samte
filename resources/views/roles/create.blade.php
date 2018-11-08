@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="card">
			<div class="card-header card-header-primary text-center text-muted"><h5>FORMULARIO PARA CREACIÓN PARA UN NUEVO ROL</h5></div>
			<div class="card-body">
				<h4><a href="{{ route('roles.index') }}" role="button" class="btn btn-success"><i class="fa fa-bars"></i> LISTAR ROLES</a></h4></br>
					{!! Form::open(array('route' => 'roles.store', 'method' => 'POST')) !!}
					{{ csrf_field() }}
						@include('roles.partials.formRol')
						<div class="text-center">
							{!! Form::button('<i class="fa fa-drivers-license-o"></i> Crear Rol', array('type'=> 'submit','class'=>'btn btn-success')) !!}
						</div>
					{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
@endsection