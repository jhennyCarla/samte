@extends('layout.master')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="card">
			<div class="card-header card-header-primary text-center text-muted"><h5>MODIFICAR GESTIÓN</h5></div>
			<div class="card-body">
				@include('errores.msjError')
				{!! Form::model($gestionModificar,['method' => 'PATCH','route'=>['gestiones.update', $gestionModificar->id]]) !!}
				{{-- {!! Form::open(array('route'=> array('gestiones.update', $gestionModificar->id), 'method' => 'POST'), array('role'=>'form')) !!} --}}
				{{-- {!! method_field('PUT') !!} --}}

				<input type="hidden" name="anio" value={{ $gestionModificar->anio}}>
				<input type="hidden" name="anio_old" value={{ $gestionModificar->anio}}>
        		<input type="hidden" name="periodo_old" value={{ $gestionModificar->periodo}}>
        		<input type="hidden" name="tipo_old" value={{ $gestionModificar->tipo_gestiones->id}}>

				<div class="form-group row">
					<div class="col-md-2">
						<h4><a href="{{ route('gestiones.index') }}" role="button" class="btn btn-success"><i class="fa fa-bars"></i> LISTAR GESTIONES</a></h4>
					</div>
					{!! Form::label('anio','*Año:',['class'=>'col-md-2 text-right']) !!}
					<div class="col-sm-2">
            		<fieldset disabled>
              			{!! Form::text('anio_gest',$gestionModificar->anio,['class' => 'form-control', 'id'=>'disabledTextInput','placeholder'=>$gestionModificar->anio]) !!}
            			</fieldset>
          			</div>
          			
					{!! Form::label('periodo','*Periodo:',['class'=>'col-md-2 text-right']) !!}
						<div class="col-md-1">
							{!! Form::select('periodo',array('1'=>'1','2'=>'2','3'=>'3','4'=>'4'),null,['class'=>'form-control ']) !!}
						</div>
				</div>
				<div class="form-group row">
						{!! Form::label('tipo_gestion','*Tipo Gestion:',['class'=>'col-md-2']) !!}
						<div class="col-md-7">
						{!! Form::select('tipo_gestion',$tipo_gestiones,$gestionModificar->tipo_gestiones->id,['class'=>'form-control','placeholder'=>'Seleccione','required' => 'required',]) !!}
						</div>
					</div>
					
					<div class="form-group row">
						{!! Form::label('fecha_inicio','*Fecha Inicio Gestion:',['class'=>'col-md-3']) !!}
						{!! Form::text('fecha_inicio',null,array('placeholder'=>'Fecha Inicio Gestion','required'=>'required','id'=>'fecha-inicio','readonly'=>'readonly')) !!}
					</div>

					<div class="form-group row">
					{!! Form::label('fecha_fin','*Fecha Fin Gestion:',['class'=>'col-md-3']) !!}
					{{-- {!! Form::text('fecha-f','',array('id'=>'fecha-fin','placeholder'=>'Fecha Fin Gestion','required'=>'required')) !!} --}}
					{!! Form::text('fecha_fin',null, array('placeholder'=>'Fecha Fin Gestion','id' => 'fecha-fin', 'data-date-format' => "dd-mm-yyyy",'readonly'=>'readonly')) !!}
					</div>
				
				<br>
				{!! Form::label('habilitar_plan','*HABILITAR PLAN:',['class'=>'col-md-3']) !!}
				{{-- {!! csrf_field() !!} --}}
				<table class="table table-striped table-bordered table-hover table-condensed">
					<tr class="table-info">
						<th class="table-info">Nro</th>
						<th class="table-info">Cod PLAN</th>
						<th class="table-info">PLAN</th>
						<th class="table-info">HABILITAR PLAN</th>
						<th class="table-info">HABILITAR EDICIÓN PLAN</th>
						@foreach($planes as $key=>$plan)
						<tr>
							<td>{{ ++$key }}</td>
							<td>{{ $plan->cod_plan }}</td>
							<td>{{ $plan->nombre_plan }}</td>
							<td class="text-center">
							@if($plan->activo =='SI')
								{{ Form::checkbox('plan[]',$plan->id,true) }}
							@else
								{{ Form::checkbox('plan[]',$plan->id) }}	
							@endif
							</td>
							<td class="text-center">
							@if($plan->activo_plan =='SI')
								{{ Form::checkbox('plan_activo[]',$plan->id,true) }}
							@else
								{{ Form::checkbox('plan_activo[]',$plan->id) }}	
							@endif
							</td>
						</tr>
					</tr>
						@endforeach 
					</table>
				<div class="text-center">
				          {!! Form::button('<i class="fa fa-edit"></i> Modificar Gestion', array('type'=> 'submit','class'=>'btn btn-success'))!!}
				          <a href="{{ route('gestiones.index') }}" role="button" class="btn btn-danger"><i class="fa fa-close"></i> Cancelar</a>
				</div> 
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection
{{-- @section('script') --}}
{{-- <script>
	$(document).ready(function(){
		 $('#activo').click(function(event){
		// });
		//$(document).on('click','#activo',function(event){
			event.preventDefault();
			var estado=$(this).attr('value');
			var token=$('input[name="_token"]').val();
			console.log(estado);
		});
	 });
</script> --}}
{{-- @endsection --}}