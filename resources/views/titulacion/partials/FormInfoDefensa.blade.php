<div class="form-group row">
	{!! Form::label('ambiente','Ambiente:',['class'=>'col-md-2'])!!}
	<div class=" col-sm-9 col-md-5">
		{{ csrf_field() }}
	<select name="id_ambiente" class="form-control" id="select" >
        <option value='-1'>Seleccione</option>
            @foreach ($ambiente as $value)
            <option value="{{$value->id}}" class="edit{{$value->id}}">{{$value->nombre_ambiente}}</option>
            @endforeach 
    </select>
	</div>
	<div class="col-md-2 col-lg-2">
		<a href="#" class="editAmb btn btn-secondary btn-sm"  id="editAmb" data-toggle="modal"><i class="fa fa-pencil"></i> Modificar </a>
	</div>	
	<div class="col-md-2 col-lg-2">
		<a href="#" class="crearAmb btn btn-warning btn-sm" data-toggle="modal"><i class="fa fa-plus"></i> Nuevo </a>      
	</div>
	
</div>

<div class="form-group row">
	{!! Form::label('fecha_defensa','Fecha Defensa:',['class'=>'col-md-2'])!!}
	<div class="col-md-2">
	{!! Form::date('fecha_defensa', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
	</div>
	{!! Form::label('hora_inicio_defensa','Hora Inicio Defensa:',['class'=>'col-md-2 text-right'])!!}
	<div class="col-md-2">
	{!! Form::datetime('hora_inicio_defensa', \Carbon\Carbon::now()->format('h:i:s'), ['class' => 'form-control']) !!}
	</div>
	{!! Form::label('hora_fin_defensa','Hora Fin Defensa:',['class'=>'col-md-2 text-right'])!!}
	<div class="col-md-2">
	{!! Form::datetime('hora_fin_defensa', \Carbon\Carbon::now()->format('h:i:s'), ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group row">
	{!! Form::label('nota','Nota numeral:',['class'=>'col-md-2']) !!}
	<div class="col-md-3">
		<input type="number" name="nota" id="nota" class="form-control" min="1" max="100" onkeyup="if(this.value>100){this.value='100';}else if(this.value<0){this.value='0'}">
	{{-- {!! Form::text('nota',null,['type'=>'input','placeholder' => 'nota numeral','class'=>'form-control numbers','size' => '30x3','id'=>'nota']) !!} --}}
	</div>
	{!! Form::label('nota_literal','Nota Literal:',['class'=>'col-md-2 ']) !!}
	<div class="col-md-3">
	{!! Form::text('nota_literal',null,array('placeholder' => 'nota literal','class'=>'form-control','size' => '30x3','id'=>'nota_literal','readonly' => 'true')) !!}
	</div>
</div>

<h5>Información Complementaria</h5>
<hr class="lineaHorizontal">
<div class="form-group row">
	{!! Form::label('palabraClave','Palabra clave:', ['class'=>'col-md-2']) !!}
	<div class="col-md-10">
	{!! Form::textarea('palabraClave',null,array('placeholder' => 'palabra clave','class'=>'form-control','size' => '30x3')) !!}
	</div>
</div>

<div class="form-group row">
	{!! Form::label('observacion','observaciones:', ['class'=>'col-md-2']) !!}
	<div class="col-md-10">
	{!! Form::textarea('observacion',null,array('placeholder' => 'Ingrese la cantidad de avance que tiene el estudiante','class'=>'form-control','size' => '30x3')) !!}
	</div>
</div>


