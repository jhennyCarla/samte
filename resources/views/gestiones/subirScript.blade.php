@extends('layout.master')
@section('contenido')
{!! Form::open(array('route'=>'gestiones.importarScript','method' => 'POST','files'=>'true')) !!}
<div class="container-fluid">
	<div class="row">
		<div class="card">
  			<div class="card-header card-header-primary text-center text-muted"><h5>SUBIR SCRIPT CSV</h5></div>
			<div class="card-body">
				{!! csrf_field() !!}
				<div class="form-group row">
					{!! Form::label('gestion','* Seleccione la Gestión:',['class'=>'col-md-3']) !!}
					<div class="col-md-3">
					{!! Form::select('gestion',$gestiones->pluck('anioGestionTipo','id'),null,['placeholder'=>'Seleccione','required'=>'required','class'=>'form-control']) !!}
					</div>
				</div>
				<div class="form-group row">
					{!! Form::label('sample_file','Selecciones el Archivo a Importar:',['class'=>'col-md-3']) !!}
					<div class="col-md-6">
					{!! Form::file('archivo',['required'=>'required','id'=>'archivo','name'=>'archivo','class'=>'form-control']) !!}
					</div>
				</div>
				<div class="text-center">
				{!! Form::button('<i class="fa fa-upload"></i> SUBIR ARCHIVO',['type'=>'submit','class'=>"btn btn-success"]) !!}
				</div>
			</div>
		</div>
	</div>
</div>
{!! Form::close() !!}

@endsection
