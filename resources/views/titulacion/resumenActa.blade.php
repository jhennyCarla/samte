@extends('layout.master')  
@section('contenido')  
<div class="container">
  <!-- <div class="col-md-4 ml-auto mr-auto"> -->
  <div class="card">
    <div class="card-header card-header-primary text-center">
      <h6><strong>RESUMEN DEL ACTA</strong></h6>    
    </div>
    <div class="card-body">
      <h5>Informacion de la tesis:</h5>
      <hr class="lineaHorizontal">
        <div class="form-group row">
          <p class="col-md-4">COD SIS</p>
          <p class="col-md-4">{{ $usuario->cod_sis}}</p>
        </div>
        <div class="form-group row">
          <p class="col-md-4">NOMBRE Y APELLIDOS</p>
          <p class="col-md-4">{{ $usuario->nombreCompleto }}</p>
        </div>
        <div class="form-group row">
          <p class="col-md-4">CARRERA</p>
          <p class="col-md-4">{{ $usuario->nombre_plan }}</p>
        </div>
        <div class="form-group row">
          <p class="col-md-4">NOMBRE DE LA TESIS</p>
          <p class="col-md-4">{{ $usuario->titulo_defensa }}</p>
        </div>
        <div class="form-group row">
          <p class="col-md-4">MODALIDAD TESIS</p>
          <p class="col-md-4">{{ $usuario->nombre_modalidad }}</p>
        </div>
        <div class="form-group row">
          <p class="col-md-4">AÑO</p>
          <p class="col-md-4">2018</p>
        </div>
      
        <div class="form-group row">
          <p class="col-md-4">PERIODO</p>
          <p class="col-md-4">1</p>
        </div>
        
        {!! Form::open()!!}
        <h5>Subir Archivo:</h5>
      <hr class="lineaHorizontal">
        <div class="form-group row">
          {!! Form::label('descripcion','Descrición:', ['class'=>'col-md-3']) !!}
          <div class="col-md-9">
          {!! Form::label('descripcion',null,['placeholder' => 'Escriba una breve descipcion','class'=>'form-control']) !!}
          </div>
        </div>

        <div class="form-group row">
          {!! Form::label('resumenActa','Selecciones el Archivo a Importar:',['class'=>'col-md-3']) !!}
          <div class="col-md-9">
          {!! Form::file('resumenActa',['required'=>'required','id'=>'archivoActa','name'=>'archivoActa','class'=>'form-control']) !!}
          </div>
        </div>


        <div class="text-center">
        {!! Form::button('<i class="fa fa-upload"></i> SUBIR ARCHIVO',['type'=>'submit','class'=>"btn btn-success"]) !!}
        {{ form::close() }}
        <a href="{{ route('titulacion.index')}}" role="button" class="btn btn-primary">VOLVER</a>
        </div>
    </div>
  </div>
</div>

@endsection