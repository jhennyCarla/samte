@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="card">
			<div class="card-header card-header-primary text-center text-muted"><h5>REGISTRAR NOTAS INSCRITOS A TITULACIÓN</h5></div>
			<div class="card-body">
				<div class="form-group row text-center">
					{!! Form::label('gestion_plan_area','* Seleccione Gestión/Plan/Area:',['class'=>'col-md-3']) !!}
					<div class="col-md-6">
					{!! Form::select('gestion',['1'=>'1','2'=>'2'],null,['placeholder'=>'Seleccione','required'=>'required','class'=>'form-control']) !!}
					</div>
				</div>
				<div class="form-row text-center">
					<div class="form-group col-md-3">
						{!! Form::label('clave','* clave para el Registro de Notas:') !!}
					</div>
            		<div class="form-group col-md-1">
            			{!! form::label('codigo1','C5',['class'=>'alert alert-danger']) !!}
            			{!! Form::password('codigo1',['class'=>'form-control']) !!}
					</div>
					<div class="form-group col-md-1">
            			{!! form::label('codigo2','B3',['class'=>'alert alert-danger']) !!}
            			{!! Form::password('codigo2',['class'=>'form-control']) !!}
					</div>
					<div class="form-group col-md-1">
            			{!! form::label('codigo3','A1',['class'=>'alert alert-danger']) !!}
            			{!! Form::password('codigo3',['class'=>'form-control']) !!}
					</div>
					<div class="form-group col-md-1">
            			{!! form::label('codigo4','H4',['class'=>'alert alert-danger']) !!}
            			{!! Form::password('codigo4',['class'=>'form-control']) !!}
					</div>
				</div>
				<div class="text-center">
				{!! Form::button('SELECCIONAR',['type'=>'submit','class'=>"btn btn-success"]) !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection