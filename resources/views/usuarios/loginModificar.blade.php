@extends('layout.master')
@section('contenido')
<div class="container">
  <div class="row">
    <div class="card">
      <div class="card-header card-header-primary text-center text-muted"><h5>FORMULARIO MODIFICAR LOGIN DE USUARIO</h5>
      </div>
      <div class="card-body"> 
        @include('errores.msjError')
        {{ Form::open(array('route' =>array('usuarios.validarModLogin', $usuario->id), 'method' => 'POST'), array('role'=> 'form')) }}
            <div class="form-group row">
              {!! Form::label('login', 'Login Actual:',['class'=>'col-sm-2 col-form-label']) !!}
              <div class="col-sm-10">
                <fieldset disabled>
                  {!! Form::text('login',null, array('class' => 'form-control', 'id'=>'disabledTextInput','placeholder'=>$usuario->login)) !!}
                </fieldset>
              </div>
            </div>
            <div class="form-group row">
              {!! Form::label('nuevo_login', 'Ingrese su nuevo login:',['class'=>'col-sm-2 col-form-label']) !!}
              <div class="col-sm-10">
                {!! Form::text('nuevo_login',null, array('class' => 'form-control','placeholder'=>'Introduce su nuevo login', 'id'=>'password')) !!}
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