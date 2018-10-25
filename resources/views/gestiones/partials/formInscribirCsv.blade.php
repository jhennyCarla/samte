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