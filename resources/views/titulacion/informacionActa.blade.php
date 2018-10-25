@extends('layout.master')  
@section('contenido')  
<div class="container">
  <!-- <div class="col-md-4 ml-auto mr-auto"> -->
  <div class="card">
    <div class="card-header card-header-primary text-center">
      <h6><strong>INFORMACIÓN DEL ACTA</strong></h6>    
    </div>
    <div class="card-body">
      <h5>Informacion de l(os) Estudiante(s):</h5>
      <hr class="lineaHorizontal">
      <div class="form-group row">
        <p class="col-md-4">ESTUDIANTE(S)</p>
        <p class="col-md-4">{{ $usuario->nombreCompleto }}</p>
      </div>
      <h5>Informacion de la tesis:</h5>
      <hr class="lineaHorizontal">
        <div class="form-group row">
          <p class="col-md-4">MODALIDAD</p>
          <p class="col-md-4">{{ $usuario->nombre_modalidad }}</p>
        </div>
        <div class="form-group row">
          <p class="col-md-4">NOMBRE DE LA TESIS</p>
          <p class="col-md-4">{{ $usuario->titulo_defensa }}</p>
        </div>
        <div class="form-group row">
          <p class="col-md-4">NOTA</p>
          <p class="col-md-4">{{ $usuario->nota }} ({{ $usuario->nota_literal }})</p>
        </div>
        <div class="form-group row">
          <p class="col-md-4">OBSERVACIÓN</p>
          <p class="col-md-4">{{ $usuario->observacion }}</p>
        </div>
      <h5>Informacion de los tribunales:</h5>
      <hr class="lineaHorizontal">
      <h5>Informacion de la defensa de Tesis:</h5>
      <hr class="lineaHorizontal">
      <div class="form-group row">
          <p class="col-md-4">AMBIENTE</p>
          <p class="col-md-4">{{ $usuario->nombre_ambiente }}</p>
        </div>
        <div class="form-group row">
          <p class="col-md-4">FECHA DEFENSA</p>
          <p class="col-md-4">{{ $usuario->fecha_defensa }}</p>
        </div>
        <div class="form-group row">
          <p class="col-md-4">HORA INICIO</p>
          <p class="col-md-4">{{ $usuario->hora_inicio_defensa }}</p>
        </div>
        <div class="form-group row">
          <p class="col-md-4">HORA FIN</p>
          <p class="col-md-4">{{ $usuario->hora_fin_defensa}}</p>
        </div>
      <h5>Informacion complementaria:</h5>
      <hr class="lineaHorizontal">
      <div class="form-group row">
          <p class="col-md-4">PALABRA CLAVE</p>
          <p class="col-md-4">---</p>
        </div>
        <div class="form-group row">
          <p class="col-md-4">ESTADO</p>
          <p class="col-md-4">El estudiante no cuenta con CD que se pide</p>
        </div>
        <div class="form-group row">
          <p class="col-md-4">OBSERVACIÓN</p>
          <p class="col-md-4">{{ $usuario->descripcion}}</p>
        </div>
        <div class="text-center">
        <a href="{{ route('titulacion.index')}}" role="button" class="btn btn-success">VOLVER</a>
      </div>
    </div>
  </div>
</div>

@endsection