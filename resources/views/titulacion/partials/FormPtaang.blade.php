<div class="form-group row">
	{!! Form::label('grupo_ptaang','Grupo:', ['class'=>'col-md-2']) !!}
	<div class="col-md-10">
	{!! Form::text('grupo_ptaang',null,['placeholder' => 'Ingrese el numero de grupo','class'=>'form-control']) !!}
	</div>
</div>
<div class="form-group row">
	{!! Form::label('modalidad_ptaang','Modalidad:', ['class'=>'col-md-2']) !!}
	<div class="col-md-10">
	{!! Form::select('modalidad_ptaang',['memoria profesional'=>'Memoria profesional','trabajo dirigido'=>'Trabajo dirigido','otro'=>'Otro'],null,['placeholder' => 'Ingrese la modalidad','class'=>'form-control']) !!}
	</div>
</div>
<div class="form-group row">
	{!! Form::label('facultad','Facultad:', ['class'=>'col-md-2']) !!}
	<div class="col-md-10">
	<fieldset disabled>
	{!! Form::text('facultad',null,['type'=>'input','placeholder' => 'FACULDAD DE CIENCIAS ECONOMICAS','class'=>'form-control numbers','size' => '30x3','id'=>'nota']) !!}
	</fieldset>
	</div>
</div>


<div class="form-group row">
	{!! Form::label('nota_ptaang','Nota numeral:',['class'=>'col-md-2']) !!}
	<div class="col-md-3">
		<input type="number" name="nota_ptaang" id="nota_ptaang" class="form-control" min="1" max="100" onkeyup="if(this.value>100){this.value='100';}else if(this.value<0){this.value='0'}">
	</div>
	{!! Form::label('nota_literal_ptaang','Nota Literal:',['class'=>'col-md-2 ']) !!}
	<div class="col-md-3">
	{!! Form::text('nota_literal_ptaang',null,array('placeholder' => 'nota literal','class'=>'form-control','size' => '30x3','id'=>'nota_literal_ptaang','readonly' => 'true')) !!}
	</div>
</div>

<div class="form-group row">
	{!! Form::label('version','Version:', ['class'=>'col-md-2']) !!}
	<div class="col-md-10">
	{!! Form::text('version',null,['placeholder' => 'Version ','class'=>'form-control']) !!}
	</div>
</div>
<div class="form-group row">
	{!! Form::label('expedido','Expedido:', ['class'=>'col-md-2']) !!}
	<div class="col-md-10">
	{!! Form::text('expedido',null,['placeholder' => 'Expedido ','class'=>'form-control']) !!}
	</div>
</div>
<div class="form-group row">
	{!! Form::label('universidad','Universidad:', ['class'=>'col-md-2']) !!}
	<div class="col-md-10">
	<fieldset disabled>
	{!! Form::text('universidad',null,['type'=>'input','placeholder' => 'UNIVERSIDAD MAYOR DE SAN SIMON','class'=>'form-control numbers','size' => '30x3','id'=>'nota']) !!}
	</fieldset>
	</div>
</div>
