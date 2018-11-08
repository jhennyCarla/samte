@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="card">
		<div class="card-header card-header-primary text-center text-muted"><strong>FORMULARIO PARA EDICIÓN DE UN ROL</strong></div>
			<div class="card-body">
				<h4><a href="{{ route('roles.index') }}" role="button" class="btn btn-success"><i class="fa fa-bars"></i> LISTAR ROLES</a></h4>
				{!! Form::model($rol, array('route' => array('roles.update', $rol->id)))
				 !!}
					{{ method_field('PUT') }}
					{{ csrf_field() }}
					@include('roles.partials.formRol')
					<div class="text-center">
						{!! Form::button('<i class="fa fa-edit"></i> Editar Rol',['type'=> 'submit','class'=>'btn btn-success'])!!}
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection