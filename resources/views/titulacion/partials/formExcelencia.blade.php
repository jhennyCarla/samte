<div class="form-group row">
	{!! Form::label('numero_resolucion','Nº Resolución:', ['class'=>'col-md-2']) !!}
	<div class="col-md-10">
	{!! Form::text('numero_resolucion',null,['placeholder' => 'Ingrese el numero de Resolución','class'=>'form-control','required'=>'required']) !!}
		@if($errors->has('numero_resolucion'))
			{!! $errors->first('numero_resolucion','<p class="rounded msjAlert">:message</p>') !!}
		@endif
	</div>
</div>
<div class="form-group row">
	{!! Form::label('fecha_resolucion','Fecha Resolución:',['class'=>'col-md-2'])!!}
	<div class="col-md-3">
		<div class="input-group mb-3">
			{!! Form::text('fecha_resolucion',null,array('placeholder'=>'AAAA/MM/DD','required'=>'required','id'=>'datepicker','class'=>'form-control')) !!}
			<div class="input-group-append text-center">
				<span class="input-group-text"  style="background-color:#17a2b84d; width:40px; "><i class="fa fa-calendar" style="color:#ffa31a;"></i></span>
			</div>
		</div>
		@if($errors->has('fecha_resolucion'))
			{!! $errors->first('fecha_resolucion','<p class="rounded msjAlert">:message</p>') !!}
		@endif
	</div>
	{!! Form::label('autoridad','Autoridad:',['class'=>'col-md-2'])!!}
	<div class="col-md-5">
	{!! Form::text('autoridad',null,['placeholder' => 'Ingrese la autoridad a cargo','class'=>'form-control','required'=>'required']) !!}
		@if($errors->has('autoridad'))
			{!! $errors->first('autoridad','<p class="rounded msjAlert">:message</p>') !!}
		@endif
	</div>
</div>