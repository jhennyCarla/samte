<div class="form-group row {{$errors->has('nombre_rol')? 'has-error' : '' }}">
	{!! Form::label('nombre_rol', 'Nombre del Nuevo Rol',['class'=>'col-md-2']) !!}
	<div class="col-md-10">
	{!! Form::text('nombre_rol',null, array('placeholder'=> 'Introduce el nuevo Rol', 'class' => 'form-control')) !!}
		@if($errors->has('nombre_rol'))
			{!! $errors->first('nombre_rol', '<div class="alert alert-danger ">:message</div>') !!}
		@endif
	</div>
</div>

<div class="form-group row {{$errors->has('descripcion_rol')? 'has-error' : '' }} ">
	{!! Form::label('descripcion_rol', 'Descripcion Rol',['class'=>'col-md-2']) !!}
	<div class="col-md-10">
	{!! Form::text('descripcion_rol',null, array('placeholder'=> 'Introduce  la Descripcion del nuevo Rol', 'class' => 'form-control')) !!}
		@if($errors->has('descripcion_rol'))
			{!! $errors->first('descripcion_rol', '<div class="alert alert-danger">:message</div>') !!}
		@endif
	</div>
</div>