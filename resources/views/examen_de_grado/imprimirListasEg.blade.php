@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="card">
			<div class="card-header card-header-primary text-center text-muted"><h5>IMPRIMIR LISTAS INSCRITOS A TITULACIÓN</h5></div>
			<div class="card-body">
				<div class=" mx-auto" style="width: 2000px;">
				{!! csrf_field() !!}
					<div class="form-group row">
						{!! Form::label('gestion','* Seleccione la Gestión:',['class'=>'col-md-2']) !!}
						<div class="col-md-3">
						{!! Form::select('gestion',['1'=>'1','2'=>'2'],null,['placeholder'=>'Seleccione','required'=>'required','class'=>'form-control']) !!}
						</div>
					</div>
					<div class="form-group row">
						{!! Form::label('plan','* Seleccione plan:',['class'=>'col-md-2']) !!}
						<div class="col-md-3">
						{!! Form::select('plan',['1'=>'089801 LIC. EN CONTADURIA PUBLICA','2'=>'2'],null,['placeholder'=>'Seleccione','required'=>'required','class'=>'form-control']) !!}
						</div>
					</div>
					<div class="form-group row">
						{!! Form::label('area','* Seleccione Área:',['class'=>'col-md-2']) !!}
						<div class="col-md-3">
						{!! Form::select('area',['1'=>'AREA ADMINISTRATIVA','2'=>'2'],null,['placeholder'=>'Seleccione','required'=>'required','class'=>'form-control']) !!}
						</div>
					</div>
					<div class="form-group row">
						{!! Form::label('tipo_impresion','* Tipo de Impresión:',['class'=>'col-md-2']) !!}
						<div class="col-md-3">
						{!! Form::select('tipo_impresion',['1'=>'Lista inscritos por Area con CODIGO','2'=>'2'],null,['placeholder'=>'Seleccione','required'=>'required','class'=>'form-control']) !!}
						</div>
					</div>
				</div>
				
				<div class="text-center">
				{!! Form::button('<i class="fa fa-upload"></i> SUBIR ARCHIVO',['type'=>'submit','class'=>"btn btn-success"]) !!}
			</div>
		</div>
	</div>
</div>

@endsection