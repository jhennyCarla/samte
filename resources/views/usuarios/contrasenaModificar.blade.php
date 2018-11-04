@extends('layout.master')
@section('contenido')

<div class="container">
  <div class="row">
    <div class="card">
      <div class="card-header card-header-primary text-center text-muted"><h5>FORMULARIO MODIFICAR CONTRASEÑA DE USUARIO</h5>
      </div>
      <div class="card-body">
        @include('errores.msjError')
          {{ Form::open(array('route' =>array('usuarios.validarModContrasena', $usuario->id), 'method' => 'POST')) }}
            <div class="form-group row">
            	{!! Form::label('contrasena', 'Ingrese su contraseña:',['class'=>'col-form-label col-sm-4']) !!}
            	<div class="col-sm-8">
            		{!! Form::password('contrasena', array('placeholder'=> 'Introduce su contraseña', 'class' => 'form-control')) !!}
            	</div>
        		</div>
              
            <div class="form-group row">
              {!! Form::label('nueva_contrasena', 'Ingrese su nueva contraseña:',['class'=>'col-form-label col-sm-4']) !!}
              <div class="col-sm-7">
                {!! Form::password('nueva_contrasena', ['placeholder'=>'Introduce su nueva contraseña','class' => 'form-control', 'id'=>'nuevaContrasena']) !!}
              </div>
              <div class="col-sm-1">
                <input name ="mostrar" type="checkbox" onchange="document.getElementById('nuevaContrasena').type = this.checked ? 'text' : 'password'"> Ver </input>
              </div>
            </div>
              
            <div class="form-group row"> 
            	{!! Form::label('reescribir_contrasena', 'Reescriba su nueva contraseña:',['class'=>'col-form-label col-sm-4']) !!}
            	<div class="col-sm-8">
            		{!! Form::password('reescribir_contrasena', ['placeholder'=>'Reescribe tu nueva contraseña','class' => 'form-control']) !!}
            	</div>
         		</div>

            <div class="text-center">{{ Form::button('<i class="fa fa-edit"></i> Editar Login', array('type'=> 'submit','class'=>'btn btn-success')) }}
               <a href="{{ route('home.index') }}" role="button" class="btn btn-danger"><i class="fa fa-close"></i> Cancelar</a>
            </div> 
          {!! form::close() !!}      
    	</div>
    </div>
  </div>
</div>
@endsection